
export default function pagesApp(){


  return {

    modalTitle: "New",


    readNotification(){
      this.showModal('notificationModal');
    },


    openCashOutModal(){
      this.showModal('cashOutModal');

    },


    openConfirmCashOut(){
      this.showModal('confirmCashOut');
    },


    openEmailVerifyReg() {
      this.errors = {}; // Clear errors
      this.modalTitle = "Email Verification"; // Update modal title
      this.paragraphTitle = "We want to verify your email."; // Update paragraph
      this.showModal('emailVerifyRegModal'); // Open modal
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


  }
}
