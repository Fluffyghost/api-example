const mq = window.matchMedia( "(max-width: 900px)" );

if (window.location.href.indexOf("van-hire") > -1) {

    if (mq.matches) {

        var CT = {
            ABE: {
                Settings: {
                    clientID: '546264',
                    type: 'mobile',
                    theme:  {
                      primary: '#FF434A',
                      secondary: '#0C6D75',
                      complimentary: '#F2C828'
                    },
                    step1: {
                      // deeplinkURL: 'https://book.cartrawler.com/?clientID=540416',
                      deeplinkURL: 'http://devsites-co-uk.stackstaging.com/veetoo-cars/booking/?clientID=546264',
                      showAvailNewWindow: true
                    }
                }
            }
        };

    } else {

        var CT = {
            ABE: {
                Settings: {
                    clientID: '546264',
                    type: 'desktop',
                    theme:  {
                      primary: '#FF434A',
                      secondary: '#0C6D75',
                      complimentary: '#F2C828'
                    },
                    step1: {
                      // deeplinkURL: 'https://book.cartrawler.com/?clientID=540416',
                      deeplinkURL: 'http://devsites-co-uk.stackstaging.com/veetoo-cars/booking/?clientID=546264',
                      showAvailNewWindow: true
                    }
                }
            }
        };

    }


} else {

    if (mq.matches) {

        var CT = {
            ABE: {
                Settings: {
                    clientID: '540416',
                    type: 'mobile',
                    theme:  {
                      primary: '#FF434A',
                      secondary: '#0C6D75',
                      complimentary: '#F2C828'
                    },
                    step1: {
                      // deeplinkURL: 'https://book.cartrawler.com/?clientID=540416',
                      deeplinkURL: 'http://devsites-co-uk.stackstaging.com/veetoo-cars/booking/?clientID=540416',
                      showAvailNewWindow: true
                    }
                }
            }
        };

    } else {

      var CT = {
          ABE: {
              Settings: {
                  clientID: '540416',
                  type: 'desktop',
                  theme:  {
                    primary: '#FF434A',
                    secondary: '#0C6D75',
                    complimentary: '#F2C828'
                  },
                  step1: {
                    // deeplinkURL: 'https://book.cartrawler.com/?clientID=540416',
                    deeplinkURL: 'http://devsites-co-uk.stackstaging.com/veetoo-cars/booking/?clientID=540416',
                    showAvailNewWindow: true
                  }
              }
          }
      };

  }

}


(function($){
    $(document).ready(function(){

      if(document.querySelector('div[ct-app]') != null) {
          (function() {
              CT.ABE.Settings.version = '5.0';
              var cts = document.createElement('script'); cts.type = 'text/javascript'; cts.async = true;
              cts.src = '//ajaxgeo.cartrawler.com/abe' + CT.ABE.Settings.version + '/ct_loader.js?' + new Date().getTime();
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(cts, s);
          })();
      }

      //handle form submission
      // document.getElementById('reservation-form').addEventListener('submit', function(e){
      //     e.preventDefault();
      //     //pull data from form
      //     let email = document.getElementById('email').value;
      //     let resID = document.getElementById('reservationid').value;
      //     let partnerName = "SFAL_Veetoo";
      //     //deeplink to portal example: https://customer.cartrawler.com/s/?portal=carsscanner_com&booking=ES494027560&email=mmcginley@cartrawler.com
      //     // window.location.href = ' https://customer.cartrawler.com/?language=en&portal=Veetoo_com/s/?portal=${partnerName}&booking=${resID}&email=${email}';
      //     window.location.href = ' https://customer.cartrawler.com/?portal=Veetoo_com&booking=${resID}&email=${email}';
      //
      // });

  });
})(jQuery);
