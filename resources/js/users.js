
export default function userApp() {
    return{

        deleteConfirmText: false,
        buttonActionType: "Create",

        modalTitle: "New User",
        pageTitle: "Page Title",
        paragraphTitle: "",

        updateBtn: false,
        createBtn: false,


        btnDisabled: false,
        isLoading: false,
        hasError: false,

        errors: {},

        email: "",
        image:null,
        users: [],
        userForm: {
            id: null,
            full_name: "",
            email: "",
            phone_number: "",
            password: "",
            new_password:"",
            image:null

        },

        // -------------------------------------------------------------------------

 getUsers() {
          axios.get('/users/all-users', { ContentType: "application/json", Accept: "application/json" })
              .then(res => {
                  console.log("Fetched Users:", res.data); // Debugging line
                  this.users = res.data.users
                  this.usersRepo = res.data.users
              })
              .catch(error => {

                  // Swal.fire({
                  //     position: "center",
                  //     icon: "error",
                  //     title: "Error Fetching Users!",
                  //     showConfirmButton: false,
                  //     timer: 1500,

                  // });

              console.error("Error Fetching User:", error);

      });

      },


// -------------------------------------------------------------------------
        createUser(){
            axios.post('/users/auth/register', this.userForm)
            .then(res => {
                console.log("User Created:", res.data); // Debugging line
                this.resetForm();
                Swal.fire({
                  title: "Registeration successful!",
                  text: "Login to continue!",
                  icon: "success",
                  toast: true,
                  position: "top-end",
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true,
              });

              setTimeout(()=>{
                window.location.href=("/users/auth/login-form");
                this.isLoading = false;
                this.btnDisabled = false;
              }, 3300);


            })

            .catch(error => {
              if (error.response && error.response.data.errors) {
                  this.errors = error.response.data.errors;
                  this.isLoading = false;
                  this.btnDisabled = false;


                if(this.errors.email)
                  Swal.fire({
                    title: "Registration Failed!",
                    text: this.errors.email[0],
                    icon: "error",
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 4000,
                    timerProgressBar: true,
                });

              } else {

                this.isLoading =false;
                this.btnDisabled = false
                  Swal.fire({
                      title: "Something went wrong!",
                      text: "Please try again later!",
                      icon: "error",
                      toast: true,
                      position: "top-end",
                      showConfirmButton: false,
                      timer: 4000,
                      timerProgressBar: true,
                  });

              }
          });
        },


handleSubmit() {
    if (this.buttonActionType === "Create") {
        this.createUser();
    } else if (this.buttonActionType === "Update") {
        this.updateUser();
    } else {
        console.warn("Unknown buttonActionType:", this.buttonActionType);
    }
},


        addUser(){
        this.showModal('userModal');
        this.buttonActionType = "Create";
          this.resetForm()
        },

// -------------------------------------------------------------------------

        // EDIT USERS

    editUser(user){
        this.userForm = { ...user };
        this.modalTitle = "Update User";
        this.buttonActionType = "Update";
        this.showModal('userModal');
        this.isLoading = false;
        this.btnDisabled = false;
    },

        handleEdit(){
            this.editUser();
            this.showModal('userModal');

        },

      // -------------------------------------------------------------------------

      // UPDATE USER

      setFile(event){
        this.userForm.image=event.target.files[0];
      },
      updateUser() {
            this.isLoading =true;
            this.btnDisabled = true;

                const formData = new FormData();

    // Append all user details
    Object.entries(this.userForm).forEach(([key, value]) => {
        formData.append(key, value);
    });

          axios.post(`/users/update/${this.userForm.id}`, formData,{

         headers:{"Content-Type":"multipart/form-data"}
          })
              .then(res => {
                  console.log("User Updated:", res.data); // Debugging line
                  Swal.fire({
                      position: "center",
                      icon: "success",
                      title: "Update Successful!",
                      showConfirmButton: false,
                      timer: 1500,
                  });
                      this.isLoading =false;
                     this.btnDisabled = false;
                     this.getUsers();
              })
              .catch(error => {
                     this.isLoading =false;
                     this.btnDisabled = false;
                  Swal.fire({
                      position: "center",
                      icon: "error",
                      title: "Error Updating User!",
                      showConfirmButton: false,
                      timer: 1500,
                  });
                  this.openModal('userModal');
                  console.error("Error updating user:", error);

              });
      },


// -------------------------------------------------------------------------

    // DELETE USER
 deleteUser(user) {
          Swal.fire({
              title: "Are you sure?",
              text: `All asset will be lost and you won't be able to revert account!`,
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "red",
              cancelButtonColor: "#636363",
              confirmButtonText: "Yes, delete it!"
          })
          .then((result) => {
              if (result.isConfirmed) {
                   axios.delete(`/admin/delete/${user.id}`)
                   this.getUsers()
                  .then(response => {
                      Swal.fire({
                          title: "Deleted!",
                          text: response.data.message,
                          timer: 1000,
                          icon: "success"
                      });
                      // this.getUsers();
                  })
                  .catch(error => {
                      Swal.fire({
                          position: "center",
                          icon: "error",
                          title: "Error Deleting User!",
                          showConfirmButton: false,
                          timer: 1500,
                      });
                      this.closeModal('userModal');
                      console.error("Error deleting user:", error);
                  });
              }
          });
      },

// -------------------------------------------------------------------------

        userLogin() {
          this.btnDisabled = true;
          this.isLoading = true;

          axios.post('/users/auth/login', this.userForm)
              .then(res => {
                      this.closeModal('loginModal');
                      console.log('User logged in successfully', res.data);

                        window.location.href = res.data.redirect; // Navigate to the correct dashboard
              })
              .catch(error => {
                console.log('Error Login', error.data)
                      this.isLoading = false;
                      this.btnDisabled = false;

              });
      },


        handleLogin(){
          this.userLogin();
          this.disabled = true;
        },

// -------------------------------------------------------------------------

        userLogout(){
          axios.post('/users/logout')
          .then(res => {
            console.log('Logout Successful', res.data);
          window.location.href = '/login'; // Direct URL

          })
        },


        handleLogout(){
          this.userLogout();
          alert('Logout Successful');
        },



// -------------------------------------------------------------------------
        handleEmailVerifySubmit(){
          const data={
            email: this.email,
          }
          this.isLoading =true;
          this.btnDisabled = true;
          axios.post('/users/auth/email/verification', data)
          .then( res=> {

            if(res.data.succcus){
              console.log('Email Sent successfully')
              Swal.fire({
                title: "Email Sent  successfully!",
                // text: "Login successfully!",
                icon: "success",
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
            }

              this.isLoading =false;
              this.btnDisabled = false
          })

          .catch(res=> {
            console.log('Fail to send Email',res)


            if(error.response && error.response.data.errors){
              this.errors = error.response.data.errors;

              this.isLoading =false;
              this.btnDisabled = false

             }else{
              Swal.fire({
                title: "Something went wrong!",
                text: "Please try again later! ",
                icon: "error",
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });


             }

          })
        },


        openEmailVerifyReg() {
          this.errors = {}; // Clear errors
          this.modalTitle = "Email Verification"; // Update modal title
          this.paragraphTitle = "We want to verify your email."; // Update paragraph
          this.showModal('emailVerifyRegModal'); // Open modal
        },


        openLoginPage() {
          this.errors = {};
          this.resetForm();

            window.location.href=('login-form');
        },


        openRegisterPage(){
          this.registerPage = true;
          this.loginPage = false;
          this.modalTitle="Login";
        },


        getPlanCodeLink(){
          this.closeModal('registerModal');

            const section = document.getElementById('planCards');
            if (section) {
              section.scrollIntoView({ behavior: 'smooth' });
            }
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
            Object.keys(this.userForm).forEach(key => {
                this.userForm[key] = "";
            });
        },

        init(){
          // this.editUser();
          this.getUsers();
        }
    }

};
