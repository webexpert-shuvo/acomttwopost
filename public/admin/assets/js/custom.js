(function($){
    //document Ready
    $(document).ready(function(){

        //Logout System
        $(document).on('click','a.logout_btn_cls',function(e){
            e.preventDefault();

            $('#logout_form_id').submit();

        });




    });


})(jQuery)
