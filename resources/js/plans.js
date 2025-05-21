import axios from "axios";



export default function planApp(){
    return{
        modalTitle: "New Plan",
        buttonActionType: "Create",
        paragraphTitle:"Enter Email",

        planOtpVerify: false,
        planEmailVerify: true,
        deleteConfirmText: false,
        showInputs: true,
        queryParam:"",
        plansRepo: [],
        isLoading:false,
        isPaymentCompleted:false,
        successPayload:{},

        selectedPlan: null,


        errors: {},
        btnDisabled: false,
        token: "",
        email: "", // To bind email input
        plan_id: null, // Add plan_id to track the selected plan


        plans: [],
        planForm: {
          id:null,
          image: "",
          plan_title: "",
          plan_price: "",
          plan_earn_daily: "",
          Benefit_header: "",
          watch_video: "",
          play_music: "",
          countDown_engagement: "",
          countDown_engagement_warning: "",

        },


        getPlans() {
            axios.get('/users/all-plans')
                .then(res => {

                    console.log("Fetched Plans:", res.data); // Debugging line
                    this.plans = res.data.plans
                    this.plansRepo = res.data.plans

                })

                .catch(error => {
                    console.error("Error fetching plan:", error);
                });
        },

        editPlan(plan){
            this.planForm = { ...plan };
            this.modalTitle="Update Plan",
            this.showModal('planModal');
            this.buttonActionType = "Update"
        },


        createPlan(){
          const formData= new FormData()
          Object.entries(this.planForm).forEach(([key,value])=>{
           formData.append(key,value)
          })
            axios.post('/users/plans', this.planForm, {headers:{"Content-Type":"multipart/form-data"}})

            .then(res => {


                console.log("Plan Created Successfully:", res.data); // Debugging line
                this.resetForm();
                this.closeModal('planModal');
                this.getPlans();

              Swal.fire({
                position: "center",
                icon: "success",
                title: "Plan Created Successfully!",
                showConfirmButton: false,
                timer: 1500,

            });


            })
            .catch(error => {
              if (error.response && error.response.status === 422) {
                  this.errors = error.response.data.errors; // Bind errors to Alpine.js
              } else {
                  Swal.fire({
                      title: "Something went wrong!",
                      text: "Please try again later!",
                      icon: "error",
                      toast: true,
                      position: "top-end",
                      showConfirmButton: false,
                      timer: 3000,
                      timerProgressBar: true,
                  });
              }

              // Reset loading state
              this.isLoading = false;
              this.btnDisabled = false;
          });

            },

        updatePlan(){
          const formData= new FormData()
          Object.entries(this.planForm).forEach(([key,value])=>{
           formData.append(key,value)


          })
            axios.post(`/users/plans/update/${this.planForm.id}`, formData, {
              headers:{"Content-Type":"multipart/form-data"}
            })
            .then(res => {
                console.log("Plan Updated Successfully:", res.data); // Debugging line
                this.getPlans();
                this.closeModal('planModal');

                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Plan Updated Successfully!",
                    showConfirmButton: false,
                    timer: 1500,

                });
            })
            .catch(error => {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Error Updating Plan!",
                    showConfirmButton: false,
                    timer: 1500,
                });
                this.closeModal('userModal');
                console.error("Error Updating Plan:", error);
            });
        },

        deletePlan(plan){
          console.log(plan)
            Swal.fire({
                title: "Are you sure?",
                text: `You won't be able to revert this ${this.plan.plan_title}!`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"})
                .then((result) => {
                if (result.isConfirmed) {

                    axios.delete(`/users/plans/${plan.id}`)

                    .then(response => {
                        Swal.fire({
                            title: "Deleted!",
                            text: response.data.message,
                            icon: "success"
                          });

                        this.getPlans();
                    })

                    .catch(error => {
                        Swal.fire({
                            position: "center",
                            icon: "error",
                            title: "Error Deleting Plan!",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                        this.closeModal('userModal');
                        console.error("Error Deleting Plan:", error);
                    });

                }
              });
        },


        handleFile(event){

          this.planForm.image=event.target.files[0]

         },


        handleSubmit(){
            if(this.buttonActionType === "Create"){
                this.createPlan();

        }else if(this.buttonActionType === "Update"){
                this.updatePlan();
        }else if(this.buttonActionType === "Delete"){
            this.deletePlan();
        }
    },



    handlePlanClick(plan){
      this.selectedPlan = plan;
      this.showModal('plan-payment-comfirmation');
      console.log('Selected Plan:', this.selectedPlan);

    },





    handleboostPlanPay(){

     this.payWithStack()
  },



    //PAYSTACK
    payWithStack(){
      const data = {
        plan_id:this.selectedPlan.id,
      };
      this.isLoading =true;
      this.btnDisabled = true
      axios.post('/users/pay', data)
      .then(res =>{
        const payload = res.data.payload;
        let handler = PaystackPop.setup({
          key: "pk_test_2274858e635e4b734973c3b6d033d19a432dcb68",
          amount:payload.amount,
          currency: "NGN",
          ref: payload.reference,
          email:payload.email,

          callback: (res)=>{
            if(res.status=="success"){
              this.successPayload=res
              this.isPaymentCompleted=true

                    this.isLoading = false;
                    this.btnDisabled = false;
              return this.handlePaymentSuccess(res);
            }
          }
        });

        handler.openIframe();
      })

      .catch(error => {
        this.isLoading = false;
        this.btnDisabled = false;
        console.error("Error initializing Paystack:", error);
        Swal.fire({
            position: "center",
            icon: "error",
            title: "Payment Initialization Failed",
            text: error.response?.data?.message || "Something went wrong",
            showConfirmButton: true
        });
    });
    },

    handlePaymentSuccess(res){
      const data = {
        transaction_id:res.reference,
        status:res.status,
        transaction_data:res,
      };

      axios.post('/users/verify-payment', data)
      .then(res =>{
        console.log("Payment Successful:", res.data);
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Payment Successful!",
            showConfirmButton: false,
            timer: 1500,

        });
       // this.verifyPayment();
          window.location.href="/users/auth/dashboard"
      })
      .catch(error => {
        console.error("Error verifying payment:", error);
        Swal.fire({
            position: "center",
            icon: "error",
            title: "Payment Verification Failed",
            text: error.response?.data?.message || "Something went wrong",
            showConfirmButton: true
        });
    });
    },



    cancelPlanPayment(){
      axios.post('/users/auth/cancel');
      console.log("Payment Cancelled");
      Swal.fire({
          position: "center",
          icon: "error",
          title: "Payment Cancelled",
          showConfirmButton: false,
          timer: 1500,

      });
      this.closeModal('plan-payment-comfirmation');
      this.isPaymentCompleted=false;
    },




    openPlanModal(plan){
      this.plan_id = plan.id;
      this.showModal('subscribePlanModal')
      this.modalTitle = "Email Verification";
      this.paragraphTitle = 'Please enter your email!';
    },


        openModal() {
            this.modalTitle="New Plan",
             this.buttonActionType = "Create"
            this.showModal('planModal');
            this.resetForm();
        },

        showModal(id) {
            let modalInstance = document.getElementById(id);
            if (modalInstance) {
                let modal = new bootstrap.Modal(modalInstance);
                modal.show();
            }
        },

        closeModal(id) {
            let modalInstance = document.getElementById(id);
            if (modalInstance) {
                let modal = bootstrap.Modal.getInstance(modalInstance); // Get the existing instance
                if (modal) {
                    modal.hide();
                }
            }
        },



            resetForm() {
                Object.keys(this.planForm).forEach(key => {
                    this.planForm[key] = "";
                });
            },




            handleSearch(){
              this.plans = this.plansRepo.filter(plan => Object.values(plan)
              .join().toLowerCase()
              .includes(this.queryParam.toLowerCase()));
              if(this.queryParam === ""){
                this.plans=  this.plansRepo;
              }
            },

        init() {
            this.getPlans(); // Call getPlans() when component initializes
        },


    }


}
