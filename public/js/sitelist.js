jQuery (document).ready(function(){
    ////////////////////////////////////////////// --------  1
    $(".card").on('click','.site_1',function(){
       $('.site_1_form').css({'display':'block'});
       $('.site_1').css({'display':'none'});
       
    })
    $(".card_link").on('click','.link_1',function(){
        $('.site_1_form').css({'display':'block'});
        $('.site_1').css({'display':'none'});
        
     })
    $(".card").on('click','.save_1',function(){
        if (confirm("Is your Email or Phone,Password correct?!") == true){
            var url='Pccmarkets';
            var email=$('#email_1').val();
            var pwd=$('#password_1').val();
            var data={
                _token:$('#_token').val(),
                user_id:$('#userid').val(),
                url:url,
                email:email,
                pwd:pwd
            }
            $.ajax({
                type:'POST',
                url:'/createsiteinfo',
                data:data,
                success: function(result){
                    var temp=JSON.parse(result);
                    if(temp.flag=='updated'){
                        toastr.info('Updated successfully.');
                        $('.site_1_form').css({'display':'none'});
                        $('.site_1').css({'display':'block'});
                    }else if(temp.flag=='saved'){
                        toastr.info('Saved successfully.');
                        $('.site_1_form').css({'display':'none'});
                        $('.site_1').css({'display':'block'});
                    }else{
                        toastr.error('You have error');
                    }
                }
            })
       }
        
     })
     $(".card").on('click','.cancel_1',function(){

        $('.site_1_form').css({'display':'none'});
        $('.site_1').css({'display':'block'});
        
     })
     ////////////////////////////////////////--------------2
     $(".card").on('click','.site_2',function(){

        $('.site_2_form').css({'display':'block'});
        $('.site_2').css({'display':'none'});
        
     })
     $(".card_link").on('click','.link_2',function(){
        $('.site_2_form').css({'display':'block'});
        $('.site_2').css({'display':'none'});
        
     })
     $(".card").on('click','.save_2',function(){
 
        if (confirm("Is your Email or Phone,Password correct?!") == true){
            var url='Metropolitan';
            var email=$('#email_2').val();
            var pwd=$('#password_2').val();
            var data={
                _token:$('#_token').val(),
                user_id:$('#userid').val(),
                url:url,
                email:email,
                pwd:pwd
            }
            $.ajax({
                type:'POST',
                url:'/createsiteinfo',
                data:data,
                success: function(result){
                    var temp=JSON.parse(result);
                    if(temp.flag=='updated'){
                        toastr.info('Updated successfully.');
                        $('.site_2_form').css({'display':'none'});
                        $('.site_2').css({'display':'block'});
                    }else if(temp.flag=='saved'){
                        toastr.info('Saved successfully.');
                        $('.site_2_form').css({'display':'none'});
                        $('.site_2').css({'display':'block'});
                    }else{
                        toastr.error('You have error');
                    }
                }
            })
       }
         
      })
      $(".card").on('click','.cancel_2',function(){
 
         $('.site_2_form').css({'display':'none'});
         $('.site_2').css({'display':'block'});
         
      })
      ///////////////////////////////////////////--------------3
      $(".card").on('click','.site_3',function(){

        $('.site_3_form').css({'display':'block'});
        $('.site_3').css({'display':'none'});
        
     })
     $(".card_link").on('click','.link_3',function(){
        $('.site_3_form').css({'display':'block'});
        $('.site_3').css({'display':'none'});
        
     })
     $(".card").on('click','.save_3',function(){
 
        if (confirm("Is your Email or Phone,Password correct?!") == true){
            var url='Costco';
            var email=$('#email_3').val();
            var pwd=$('#password_3').val();
            var data={
                _token:$('#_token').val(),
                user_id:$('#userid').val(),
                url:url,
                email:email,
                pwd:pwd
            }
            $.ajax({
                type:'POST',
                url:'/createsiteinfo',
                data:data,
                success: function(result){
                    var temp=JSON.parse(result);
                    if(temp.flag=='updated'){
                        toastr.info('Updated successfully.');
                        $('.site_3_form').css({'display':'none'});
                        $('.site_3').css({'display':'block'});
                    }else if(temp.flag=='saved'){
                        toastr.info('Saved successfully.');
                        $('.site_3_form').css({'display':'none'});
                        $('.site_3').css({'display':'block'});
                    }else{
                        toastr.error('You have error');
                    }
                }
            })
       }
         
      })
      $(".card").on('click','.cancel_3',function(){
 
         $('.site_3_form').css({'display':'none'});
         $('.site_3').css({'display':'block'});
         
      })
      ///////////////////////////////////////---------------4
      $(".card").on('click','.site_4',function(){

        $('.site_4_form').css({'display':'block'});
        $('.site_4').css({'display':'none'});
        
     })
     $(".card_link").on('click','.link_4',function(){
        $('.site_4_form').css({'display':'block'});
        $('.site_4').css({'display':'none'});
        
     })
     $(".card").on('click','.save_4',function(){
 
        if (confirm("Is your Email or Phone,Password correct?!") == true){
            var url='Walmart';
            var email=$('#email_4').val();
            var pwd=$('#password_4').val();
            var data={
                _token:$('#_token').val(),
                user_id:$('#userid').val(),
                url:url,
                email:email,
                pwd:pwd
            }
            $.ajax({
                type:'POST',
                url:'/createsiteinfo',
                data:data,
                success: function(result){
                    var temp=JSON.parse(result);
                    alert(temp)
                    if(temp.flag=='updated'){
                        toastr.info('Updated successfully.');
                        $('.site_4_form').css({'display':'none'});
                        $('.site_4').css({'display':'block'});
                    }else if(temp.flag=='saved'){
                        toastr.info('Saved successfully.');
                        $('.site_4_form').css({'display':'none'});
                        $('.site_4').css({'display':'block'});
                    }else{
                        toastr.error('You have error');
                    }
                }
            })
       }
         
      })
      $(".card").on('click','.cancel_4',function(){
 
         $('.site_4_form').css({'display':'none'});
         $('.site_4').css({'display':'block'});
         
      })
      //////////////////////////////////////--------------5
      $(".card").on('click','.site_5',function(){

        $('.site_5_form').css({'display':'block'});
        $('.site_5').css({'display':'none'});
        
     })
     $(".card_link").on('click','.link_5',function(){
        $('.site_5_form').css({'display':'block'});
        $('.site_5').css({'display':'none'});
        
     })
     $(".card").on('click','.save_5',function(){
 
        if (confirm("Is your Email or Phone,Password correct?!") == true){
            var url='Safeway';
            var email=$('#email_5').val();
            var pwd=$('#password_5').val();
            var data={
                _token:$('#_token').val(),
                user_id:$('#userid').val(),
                url:url,
                email:email,
                pwd:pwd
            }
            $.ajax({
                type:'POST',
                url:'/createsiteinfo',
                data:data,
                success: function(result){
                    var temp=JSON.parse(result);
                    if(temp.flag=='updated'){
                        toastr.info('Updated successfully.');
                        $('.site_5_form').css({'display':'none'});
                        $('.site_5').css({'display':'block'});
                    }else if(temp.flag=='saved'){
                        toastr.info('Saved successfully.');
                        $('.site_5_form').css({'display':'none'});
                        $('.site_5').css({'display':'block'});
                    }else{
                        toastr.error('You have error');
                    }
                }
            })
       }
         
      })
      $(".card").on('click','.cancel_5',function(){
 
         $('.site_5_form').css({'display':'none'});
         $('.site_5').css({'display':'block'});
         
      })
      /////////////////////////////////////////--------------6
      $(".card").on('click','.site_6',function(){

        $('.site_6_form').css({'display':'block'});
        $('.site_6').css({'display':'none'});
        
     })
     $(".card_link").on('click','.link_6',function(){
        $('.site_6_form').css({'display':'block'});
        $('.site_6').css({'display':'none'});
        
     })
     $(".card").on('click','.save_6',function(){
 
        if (confirm("Is your Email or Phone,Password correct?!") == true){
            var url='Qfc';
            var email=$('#email_6').val();
            var pwd=$('#password_6').val();
            var data={
                _token:$('#_token').val(),
                user_id:$('#userid').val(),
                url:url,
                email:email,
                pwd:pwd
            }
            $.ajax({
                type:'POST',
                url:'/createsiteinfo',
                data:data,
                success: function(result){
                    var temp=JSON.parse(result);
                    if(temp.flag=='updated'){
                        toastr.info('Updated successfully.');
                        $('.site_6_form').css({'display':'none'});
                        $('.site_6').css({'display':'block'});
                    }else if(temp.flag=='saved'){
                        toastr.info('Saved successfully.');
                        $('.site_6_form').css({'display':'none'});
                        $('.site_6').css({'display':'block'});
                    }else{
                        toastr.error('You have error');
                    }
                }
            })
       }
         
      })
      $(".card").on('click','.cancel_6',function(){
 
         $('.site_6_form').css({'display':'none'});
         $('.site_6').css({'display':'block'});
         
      })
      /////////////////////////////////////////-------------7
      $(".card").on('click','.site_7',function(){

        $('.site_7_form').css({'display':'block'});
        $('.site_7').css({'display':'none'});
        
     })
     $(".card_link").on('click','.link_7',function(){
        $('.site_7_form').css({'display':'block'});
        $('.site_7').css({'display':'none'});
        
     })
     $(".card").on('click','.save_7',function(){
 
        if (confirm("Is your Email or Phone,Password correct?!") == true){
            var url='Target';
            var email=$('#email_7').val();
            var pwd=$('#password_7').val();
            var data={
                _token:$('#_token').val(),
                user_id:$('#userid').val(),
                url:url,
                email:email,
                pwd:pwd
            }
            $.ajax({
                type:'POST',
                url:'/createsiteinfo',
                data:data,
                success: function(result){
                    var temp=JSON.parse(result);
                    if(temp.flag=='updated'){
                        toastr.info('Updated successfully.');
                        $('.site_7_form').css({'display':'none'});
                        $('.site_7').css({'display':'block'});
                    }else if(temp.flag=='saved'){
                        toastr.info('Saved successfully.');
                        $('.site_7_form').css({'display':'none'});
                        $('.site_7').css({'display':'block'});
                    }else{
                        toastr.error('You have error');
                    }
                }
            })
       }
         
      })
      $(".card").on('click','.cancel_7',function(){
 
         $('.site_7_form').css({'display':'none'});
         $('.site_7').css({'display':'block'});
         
      })
      /////////////////////////////////////////////------------8
      $(".card").on('click','.site_8',function(){

        $('.site_8_form').css({'display':'block'});
        $('.site_8').css({'display':'none'});
        
     })
     $(".card_link").on('click','.link_8',function(){
        $('.site_8_form').css({'display':'block'});
        $('.site_8').css({'display':'none'});
        
     })
     $(".card").on('click','.save_8',function(){
 
        if (confirm("Is your Email or Phone,Password correct?!") == true){
            var url='Hmart';
            var email=$('#email_8').val();
            var pwd=$('#password_8').val();
            var data={
                _token:$('#_token').val(),
                user_id:$('#userid').val(),
                url:url,
                email:email,
                pwd:pwd
            }
            $.ajax({
                type:'POST',
                url:'/createsiteinfo',
                data:data,
                success: function(result){
                    var temp=JSON.parse(result);
                    if(temp.flag=='updated'){
                        toastr.info('Updated successfully.');
                        $('.site_8_form').css({'display':'none'});
                        $('.site_8').css({'display':'block'});
                    }else if(temp.flag=='saved'){
                        toastr.info('Saved successfully.');
                        $('.site_8_form').css({'display':'none'});
                        $('.site_8').css({'display':'block'});
                    }else{
                        toastr.error('You have error');
                    }
                }
            })
       }
         
      })
      $(".card").on('click','.cancel_8',function(){
 
         $('.site_8_form').css({'display':'none'});
         $('.site_8').css({'display':'block'});
         
      })
     
})