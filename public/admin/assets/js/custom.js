(function($){
    //document Ready
    $(document).ready(function(){

        //Logout System
        $(document).on('click','a.logout_btn_cls',function(e){
            e.preventDefault();

            $('#logout_form_id').submit();

        });

        //Add Catgory Modal Form

        $(document).on('click','a.add_cate_btn',function(e){
            e.preventDefault();
            $('#cate_modal_form').modal('show');
        });

        //Category Status Button Setup
        $(document).on('click','.cate_status_btn',function(e){

            let checked = $(this).attr('checked');
            let cate_id = $(this).attr('cate_id');

            if(checked == 'checked'){
                $.ajax({

                    url : '/category-inactive/'+cate_id,
                    success: function(data){

                        alert('Status Inactive Update');
                    }
                });

            }else{

                $.ajax({
                    url : '/category-active/'+cate_id,
                    success: function(data){

                        alert('Status Active Update');
                    }
                });
            }
        });

        //Category Delete

        $(document).on('click','a.cate_delete',function(e){
            e.preventDefault();
            let cate_delete_id = $(this).attr('cate_delete');

                $.ajax({

                    url : '/category-delete/'+cate_delete_id,
                    success: function(data){
                        alert('data deleted successful');
                    }

                });

        });




    });


})(jQuery)
