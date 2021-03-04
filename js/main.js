$(document).ready(function()
{
  var current_preview_slider = 1;

  $('#logo').bind(
  {
     click: function()
     {
       window.location = "index.php";
     },
     mouseenter: function()
     {
       $(this).css('cursor', 'pointer')
     }
   });

   $('#download-code').bind(
   {
      click: function()
      {
         var appname = document.getElementById("download-dom").innerText;
         window.location = "img/apps/" +appname+"/download-code";
      },
      mouseenter: function()
      {
         $(this).css('cursor', 'pointer');
      }
    });


    $('#download-app').bind(
    {
       click: function()
       {
          var appname = document.getElementById("download-dom").innerText;
          window.location = "img/apps/" +appname+"/download-app";
       },
       mouseenter: function()
       {
          $(this).css('cursor', 'pointer');
       }
     });


   $('#slider-right-app').bind(
   {
      click: function()
      {

        if(document.getElementById("appstatus-dom").innerText == "enable")
        {
          if(current_preview_slider <= 5)
          {
              current_preview_slider = current_preview_slider+1;
              if(current_preview_slider == 6)
              {
                document.getElementById("appcurrent-dom").innerText = current_preview_slider;
                 var appname = document.getElementById("appname-dom").innerText;
                 var mainpath = "img/apps/";
                 var filetype = ".jpg";
                 var filename = "preview";
                 var final_address = mainpath + appname + filename + current_preview_slider + filetype;
                $('#slider-show-app').attr('src', final_address);
                // $(this).css('cursor', 'not-allowed');
                current_preview_slider = 1;
                // document.getElementById("appstatus-dom").innerText = "disable";
                document.getElementById("appcurrent-dom").innerText = "6";
                $("#slider-right-app").css('visibility', 'hidden');
                $("#slider-left-app").css('visibility', 'visible');
              }
              else
              {
                $("#slider-right-app").css('visibility', 'visible');
                $("#slider-left-app").css('visibility', 'visible');
                document.getElementById("appcurrent-dom").innerText = current_preview_slider;
                 var appname = document.getElementById("appname-dom").innerText;
                 var mainpath = "img/apps/";
                 var filetype = ".jpg";
                 var filename = "preview";
                 var final_address = mainpath + appname + filename + current_preview_slider + filetype;
                 $('#slider-show-app').attr('src', final_address);
                 $('#slider-manager-app').css('backgroundcolor','red');
                 $('#slider-show-app').on('load', function()
                 {
                   $('#slider-manager-app').css('backgroundcolor','transparent');
                 });
              }
          }
          else
          {
            // $(this).css('cursor', 'not-allowed');
            current_preview_slider = 1;
            // document.getElementById("appstatus-dom").innerText = "disable";
            // document.getElementById("appcurrent-dom").innerText = "1";

          }
        }
        else
        {
          current_preview_slider = 1;
          document.getElementById("appcurrent-dom").innerText = "1";
        }

      },
      mouseenter: function()
      {
          $(this).css('cursor', 'pointer');
      }
    });






    $('#slider-left-app').bind(
    {
       click: function()
       {
          current_preview_slider = document.getElementById("appcurrent-dom").innerText;
            if(current_preview_slider <= 7 )
            {
              if(current_preview_slider < 2)
              {
                $(this).css('cursor', 'not-allowed');
                current_preview_slider = 1;
                // document.getElementById("appstatus-dom").innerText = "disable";
                document.getElementById("appcurrent-dom").innerText = "1";
                $("#slider-right-app").css('visibility', 'visible');
                $("#slider-left-app").css('visibility', 'hidden');
              }
              else if(current_preview_slider == 2)
              {
                $("#slider-right-app").css('visibility', 'visible');
                $("#slider-left-app").css('visibility', 'hidden');
                current_preview_slider = 1;
                document.getElementById("appcurrent-dom").innerText = current_preview_slider;
                 var appname = document.getElementById("appname-dom").innerText;
                 var mainpath = "img/apps/";
                 var filetype = ".jpg";
                 var filename = "preview";
                 var final_address = mainpath + appname + filename + current_preview_slider + filetype;
                $('#slider-show-app').attr('src', final_address);
              }
              else
              {
                $("#slider-right-app").css('visibility', 'visible');
                $("#slider-left-app").css('visibility', 'visible');
                current_preview_slider = current_preview_slider-1;
                document.getElementById("appcurrent-dom").innerText = current_preview_slider;
                 var appname = document.getElementById("appname-dom").innerText;
                 var mainpath = "img/apps/";
                 var filetype = ".jpg";
                 var filename = "preview";
                 var final_address = mainpath + appname + filename + current_preview_slider + filetype;
                $('#slider-show-app').attr('src', final_address);
              }
            }
            else
            {

            }
       },
       mouseenter: function()
       {
         $(this).css('cursor', 'pointer')
       }
     });




   $('.menu-item-0').bind(
   {
      click: function()
      {
        window.location = "app.php";
      },
      mouseenter: function()
      {
        $(this).css('cursor', 'pointer')
      }
    });

    $('.menu-item-1').bind(
    {
       click: function()
       {
         window.location = "link.php";
       },
       mouseenter: function()
       {
         $(this).css('cursor', 'pointer')
       }
     });

     $('.menu-item-2').bind(
     {
        click: function()
        {
          window.location = "simcard.php";
        },
        mouseenter: function()
        {
          $(this).css('cursor', 'pointer')
        }
      });


      $('.menu-item-3').bind(
      {
         click: function()
         {
           window.location = "manage.php";
         },
         mouseenter: function()
         {
           $(this).css('cursor', 'pointer')
         }
       });


       $('.menu-item-4').bind(
       {
          click: function()
          {
            window.location = "addnewtolink.php";
          },
          mouseenter: function()
          {
            $(this).css('cursor', 'pointer')
          }
        });



        $('.menu-item-5').bind(
        {
           click: function()
           {
             window.location = "addnewtosim.php";
           },
           mouseenter: function()
           {
             $(this).css('cursor', 'pointer')
           }
         });


         $('.menu-item-6').bind(
         {
            click: function()
            {
              window.location = "addnewtoapp.php";
            },
            mouseenter: function()
            {
              $(this).css('cursor', 'pointer')
            }
          });


            $('#manage-button-1').bind(
            {
               click: function()
               {
                 window.location = "addnewtosim.php";
               },
               mouseenter: function()
               {
                 $(this).css('cursor', 'pointer')
               }
             });



             $('#manage-button-2').bind(
             {
                click: function()
                {
                  window.location = "addnewtolink.php";
                },
                mouseenter: function()
                {
                  $(this).css('cursor', 'pointer')
                }
              });


              $('#manage-button-3').bind(
              {
                 click: function()
                 {
                   window.location = "addnewtoapp.php";
                 },
                 mouseenter: function()
                 {
                   $(this).css('cursor', 'pointer')
                 }
               });


               $('#manage-button-4').bind(
               {
                  click: function()
                  {
                    window.location = "removefromsim.php";
                  },
                  mouseenter: function()
                  {
                    $(this).css('cursor', 'pointer')
                  }
                });



                $('#manage-button-5').bind(
                {
                   click: function()
                   {
                     window.location = "removefromlink.php";
                   },
                   mouseenter: function()
                   {
                     $(this).css('cursor', 'pointer')
                   }
                 });

                 $('#manage-button-6').bind(
                 {
                    click: function()
                    {
                      window.location = "removefromapp.php";
                    },
                    mouseenter: function()
                    {
                      $(this).css('cursor', 'pointer')
                    }
                  });

                  $('#manage-button-7').bind(
                  {
                     click: function()
                     {
                       window.location = "editsimcard.php";
                     },
                     mouseenter: function()
                     {
                       $(this).css('cursor', 'pointer')
                     }
                   });

                   $('#manage-button-8').bind(
                   {
                      click: function()
                      {
                        window.location = "editlink.php";
                      },
                      mouseenter: function()
                      {
                        $(this).css('cursor', 'pointer')
                      }
                    });


                    $('#manage-button-9').bind(
                    {
                       click: function()
                       {
                         window.location = "editapp.php";
                       },
                       mouseenter: function()
                       {
                         $(this).css('cursor', 'pointer')
                       }
                     });
                     $('#manage-button-10').bind(
                     {
                        click: function()
                        {
                          window.location = "clearsim.php";
                        },
                        mouseenter: function()
                        {
                          $(this).css('cursor', 'pointer')
                        }
                      });
                      $('#manage-button-11').bind(
                      {
                         click: function()
                         {
                           window.location = "clearlink.php";
                         },
                         mouseenter: function()
                         {
                           $(this).css('cursor', 'pointer')
                         }
                       });
                       $('#manage-button-12').bind(
                       {
                          click: function()
                          {
                            window.location = "clearapp.php";
                          },
                          mouseenter: function()
                          {
                            $(this).css('cursor', 'pointer')
                          }
                        });
                        $('#manage-button-13').bind(
                        {
                           click: function()
                           {
                             window.location = "";//none
                           },
                           mouseenter: function()
                           {
                             $(this).css('cursor', 'pointer')
                           }
                         });

                         $('#manage-button-14').bind(
                         {
                            click: function()
                            {
                              window.location = "";//none
                            },
                            mouseenter: function()
                            {
                              $(this).css('cursor', 'pointer')
                            }
                          });
                          $('#manage-button-15').bind(
                          {
                             click: function()
                             {
                               window.location = "appconfig.php";
                             },
                             mouseenter: function()
                             {
                               $(this).css('cursor', 'pointer')
                             }
                           });












          $('.closer-itemshow').bind(
          {
             click: function()
             {
               $('.item-show').css("visibility","hidden");
               $('.closer-itemshow').css("visibility","hidden");

               $('.platform-web-app-show').css("visibility","hidden");
               $('.platform-linux-app-show').css("visibility","hidden");
               $('.platform-windo-app-show').css("visibility","hidden");
               $('.platform-mac-app-show').css("visibility","hidden");
               $('.platform-ios-app-show').css("visibility","hidden");
               $('.platform-android-app-show').css("visibility","hidden");

               $('#download-code').css('visibility', 'hidden');

               document.getElementById("appstatus-dom").innerText = "enable";
               document.getElementById("appcurrent-dom").innerText = "1";
               current_preview_slider = 1;

               $("#slider-right-app").css('visibility', 'hidden');
               $("#slider-left-app").css('visibility', 'hidden');



             }
           });

           $('#icon-close-item-show').bind(
           {
              click: function()
              {
                $('.item-show').css("visibility","hidden");
                $('.closer-itemshow').css("visibility","hidden");

                $('.platform-web-app-show').css("visibility","hidden");
                $('.platform-linux-app-show').css("visibility","hidden");
                $('.platform-windo-app-show').css("visibility","hidden");
                $('.platform-mac-app-show').css("visibility","hidden");
                $('.platform-ios-app-show').css("visibility","hidden");
                $('.platform-android-app-show').css("visibility","hidden");

                $('#download-code').css('visibility', 'hidden');
                document.getElementById("appstatus-dom").innerText = "enable";
                document.getElementById("appcurrent-dom").innerText = "1";

                current_preview_slider = 1;

                $("#slider-right-app").css('visibility', 'hidden');
                $("#slider-left-app").css('visibility', 'hidden');

              },
              mouseenter: function()
              {
                $(this).css('cursor', 'pointer')
              }
            });







});

function check_platforms_to_show(web,lin,win,mac,ios,andr)
{
  if(web =="yes" || web == "Yes")
  {
    $('.platform-web-app-show').css('visibility', 'visible');
    $('.platform-web-app-show').css('width', '16px');
  }
  else
  {
    $('.platform-web-app-show').css('visibility', 'hidden');
    $('.platform-web-app-show').css('width', '0px');
  }

  if(lin =="yes" || lin == "Yes")
  {
    $('.platform-linux-app-show').css('visibility', 'visible');
    $('.platform-linux-app-show').css('width', '16px');
  }
  else
  {
    $('.platform-linux-app-show').css('visibility', 'hidden');
    $('.platform-linux-app-show').css('width', '0px');
  }

  if(win =="yes" || win == "Yes")
  {
    $('.platform-windo-app-show').css('visibility', 'visible');
    $('.platform-windo-app-show').css('width', '16px');
  }
  else
  {
    $('.platform-windo-app-show').css('visibility', 'hidden');
    $('.platform-windo-app-show').css('width', '0px');
  }

  if(mac =="yes" || mac == "Yes")
  {
    $('.platform-mac-app-show').css('visibility', 'visible');
    $('.platform-mac-app-show').css('width', '16px');
  }
  else
  {
    $('.platform-mac-app-show').css('visibility', 'hidden');
    $('.platform-mac-app-show').css('width', '0px');
  }

  if(ios =="yes" || ios == "Yes")
  {
    $('.platform-ios-app-show').css('visibility', 'visible');
    $('.platform-ios-app-show').css('width', '16px');
  }
  else
  {
    $('.platform-ios-app-show').css('visibility', 'hidden');
    $('.platform-ios-app-show').css('width', '0px');
  }
  if(andr =="yes" || andr == "Yes")
  {
    $('.platform-android-app-show').css('visibility', 'visible');
    $('.platform-android-app-show').css('width', '16px');
  }
  else
  {
    $('.platform-android-app-show').css('visibility', 'hidden');
    $('.platform-android-app-show').css('width', '0px');
  }
}


function set_content_wall_size(size_for_content,size_for_wall)
{
  document.getElementById("content").style.height = size_for_content+"px";
  document.getElementById("wall").style.height = size_for_wall+"px";
}


function gotox(xa)
{
  if(xa == "link")
  {
    window.location = "link.php";
  }
  else if(xa == "app")
  {
    window.location = "app.php";
  }
  else if(xa == "simcard")
  {
    window.location = "simcard.php";
  }
  else if(xa == "uploadimage")
  {
    window.location = "upload.php";
  }
  else if(xa == "upload-code-and-version")
  {
    window.location = "uploadother.php";
  }
  else
  {
      window.location = "index.php";
  }
}



function check_opensource_for_dl_button(os)
{
  if(os == "Yes" || os == "yes")
    $('#download-code').css('visibility', 'visible');
  else
  $('#download-code').css('visibility', 'hidden');
}
