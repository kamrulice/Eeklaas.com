<a href="#" class="back-to-top"> <i aria-hidden="true" class="fa fa-angle-up"></i> </a> </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.js"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script>
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.actual.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/chosen.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.parallax-1.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.elevateZoom.min.js') }}"></script>
<script src="{{ asset('frontend/js/fancybox/source/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('frontend/js/fancybox/source/helpers/jquery.fancybox-media.js') }}"></script>
<script src="{{ asset('frontend/js/fancybox/source/helpers/jquery.fancybox-thumbs.js') }}"></script>
<script src="{{ asset('frontend/js/arcticmodal/jquery.arcticmodal.js') }}"></script>



<script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/alertify.min.js"></script>




<!-- <script type="text/javascript">
    function addToCart(product_id){

    }
</script> -->






<script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    function addToCart(product_id,id) {
        var url = "{{ url('/') }}";
        $.post( url + '/api/carts/store',
            {
                product_id: product_id,
                user_id :id
            })
            .done(function (data) {
                data = JSON.parse(data);
                if (data.status == 'success') {
                    //toast
                     alertify.set('notifier','position', 'bottom-right');
                     alertify.success('Item Added To Cart Successfully !! Total Items: ' + data.totalItems + 'To Checkout <br><a href="{{ route('carts') }}"> >> Go To Checkout Page >></a>');
                    $("#totalItems").html(data.totalItems);
                }
            });
    }
</script>

<script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    function addToWishlist(product_id,id) {
        var url = "{{ url('/') }}";
        $.post( url + '/api/wishlists/store',
            {
                product_id: product_id,
                user_id :id
            })
            .done(function (data) {
                data = JSON.parse(data);
                if (data.status == 'success') {
                    //toast
                     alertify.set('notifier','position', 'bottom-right');
                     alertify.success('Item Added To Wishlist Successfully !! Total Items: ' + data.totalWishlists + 'To View <br><a href="{{ route('wishlists') }}"> >> Go To Wishlist Page >></a>');
                    $("#totalWishlists").html(data.totalWishlists);
                }
            });
    }
</script>


<script>
    function addToproduct(product_id) {
        $("#category").change(function() {
            var category = $("#category").val();
            // Send An Ajax Request To Server With This Categpory
            $("#subcategory").html("");
            var option = "";
            var url = "{{ url('/') }}";
            $.get( url + '/get-subcategory/'+category, function(data) {
                /*optional stuff to do after success */
                data = JSON.parse(data);
                data.forEach(function(element) {
                   option += "<option value='"+ element.id +"'>"+ element.name +"</option>";
                });
                $("#subcategory").html(option)
            });
        })
            }
    </script>




<!-- <script>
        $("#Mycat").change(function() {
            var category = $("#Mycat").val();
            // Send An Ajax Request To Server With This Categpory
            $("#Myproduct").html("");
            var option = "";
            var url = "{{ url('/') }}";
            $.get( url + '/get-product/'+category, function(data) {
                /*optional stuff to do after success */
                data = JSON.parse(data);
                data.forEach(function(element) {
                   option += "<option value='"+ element.id +"'>"+ element.name +"</option>";
                });
                $("#Myproduct").html(option)
            });
        })
    </script> -->

<!--     <a href="#" id="blabla">Text</a> -->

<!-- <script type="text/javascript">

$(document).ready(function(){
    $('#Mycat').attr('href','https://www.google.com/')
})

$(document).load(function(){
  $('#Mycat').attr('href').click(function(){
  alert("Clicked");
  });
});
</script> -->


<script type="text/javascript">
      $(function() {

         $("#name_error_message").hide();
         $("#address_error_message").hide();
         $("#phone_error_message").hide();
         $("#email_error_message").hide();
         $("#password_error_message").hide();
         $("#retype_password_error_message").hide();

         var error_name = false;
         var error_address = false;
         var error_email = false;
         var error_phone = false;
         var error_password = false;
         var error_retype_password = false;

         $("#form_name").focusout(function(){
            check_name();
         });
         $("#form_address").focusout(function(){
            check_address();
         });
         $("#form_phone").focusout(function(){
            check_phone();
         });
         $("#form_email").focusout(function() {
            check_email();
         });
         $("#form_password").focusout(function() {
            check_password();
         });
         $("#form_retype_password").focusout(function() {
            check_retype_password();
         });

         function check_name() {
            var pattern = /^[a-zA-Z][a-zA-Z\. ]*$/;
            var name = $("#form_name").val();
            if (pattern.test(name) && name !== '') {
               $("#name_error_message").hide();
               $("#form_name").css("border-bottom","2px solid #34F458");
            } else {
               $("#name_error_message").html("Should contain only Characters");
               $("#name_error_message").show();
               $("#form_name").css("border-bottom","2px solid #F90A0A");
               error_name = true;
            }
         }
         function check_address() {
            var pattern = /^[#.0-9a-zA-Z\s,-]+$/;
            var name = $("#form_address").val();
            if (pattern.test(name) && name !== '') {
               $("#address_error_message").hide();
               $("#form_address").css("border-bottom","2px solid #34F458");
            } else {
               $("#address_error_message").html("Please Give Your Address Correctly");
               $("#address_error_message").show();
               $("#form_address").css("border-bottom","2px solid #F90A0A");
               error_address = true;
            }
         }
         function check_phone() {
            var pattern = /^\d{1,5}\d{6,8}$/;
            var phone = $("#form_phone").val();
            if (pattern.test(phone) && phone !== '') {
               $("#phone_error_message").hide();
               $("#form_phone").css("border-bottom","2px solid #34F458");
            } else {
               $("#phone_error_message").html("Please give a valid Phone Number");
               $("#phone_error_message").show();
               $("#form_phone").css("border-bottom","2px solid #F90A0A");
               error_phone = true;
            }
         }


         function check_password() {
            var password_length = $("#form_password").val().length;
            if (password_length < 8) {
               $("#password_error_message").html("Atleast 8 Characters");
               $("#password_error_message").show();
               $("#form_password").css("border-bottom","2px solid #F90A0A");
               error_password = true;
            } else {
               $("#password_error_message").hide();
               $("#form_password").css("border-bottom","2px solid #34F458");
            }
         }

         function check_retype_password() {
            var password = $("#form_password").val();
            var retype_password = $("#form_retype_password").val();
            if (password !== retype_password) {
               $("#retype_password_error_message").html("Passwords Did not Matched");
               $("#retype_password_error_message").show();
               $("#form_retype_password").css("border-bottom","2px solid #F90A0A");
               error_retype_password = true;
            } else {
               $("#retype_password_error_message").hide();
               $("#form_retype_password").css("border-bottom","2px solid #34F458");
            }
         }

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#form_email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#form_email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#form_email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }

         $("#registration_form").submit(function() {
            error_name = false;
            error_address = false;
            check_phone = false;
            error_email = false;
            error_password = false;
            error_retype_password = false;

            check_name();
            check_address();
            check_phone();
            check_email();
            check_password();
            check_retype_password();

            if (error_name === false && error_address === false && error_email === false && check_phone === false && error_password === false && error_retype_password === false) {
               // alert("Registration Successfull");
               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }


         });
      });
   </script>



<script>

        (function($) {

            "use strict";

            $(document).ready(function() {

                /*  [ Filter by price ]

                - - - - - - - - - - - - - - - - - - - - */

                $('#slider-range').slider({

                    range: true,

                    min: 0,

                    max: 500,

                    values: [0, 300],

                    slide: function (event, ui) {

                        $('#amount-left').text(ui.values[0] );
                        $('#amount-right').text(ui.values[1] );

                    }

                });

                $('#amount-left').text($('#slider-range').slider('values', 0));

                $('#amount-right').text($('#slider-range').slider('values', 1));
            });

        })(jQuery);

    </script>



    <script type="text/javascript">

      function getSubcatContent(subCatId) {
        var url = "{{ url('/get-subcat-content') }}/"+subCatId;
        $.get(url)
            .done(function (data) {
                // alert(data);
                console.log(data);

                $("#load-subcat-content").html(data);

            });

      }

        function getBrandById(brandId) {
          // alert(brandId);
                var url = "{{ url('/get-brand-content') }}/"+brandId;
                $.get(url)
                    .done(function (data) {
                        console.log(data);
                        $("#load-brand").html('');
                        $.each(data, function (index, value) {
                            $("#load-brand").append('\<div class="card col-md-6">' +
                                '<div class="card-header"><h2 style="font-size:15px;">'+value.title+'</h2>' +
                                '</div><div class="card-body">'+value.description+'<button class="btn btn-success btn-block">Add To Cart</button>' +
                                '</div>' +
                                '</div>');

                        });

                    });
        }

    </script>
</body>
</html>
