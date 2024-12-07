function show_add()
{
    
    toastr.options = {
        "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

Command: toastr["info"]("User add succesfully", "Add User")
}





function show_del()
{
    
    toastr.options = {
        "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

Command: toastr["error"]("User Deleted succesfully", "Delete User")
}











function confirm_delet(id){

  let del=confirm("Are you sure if you want to delet this user")
  console.log(del)
  if(del==true){
    window.location.href="index.php?action=del&&id="+id;
  }
}

function edit(id) {
  if (!id) {
      console.error("No user ID provided.");
      alert("Error: User ID is missing.");
      return;
  }
  window.location.href = "add_user.php?action=edit&&id="+id;
}