<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/tracking.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <title>Hello, world!</title>
  </head>
  <body>
    @include('pages.nav')
    @include('pages.card')
    @include('pages.footer')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!-- dropdown country -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="{{asset('country/build/js/countrySelect.js')}}"></script>
    <script>
        $("#card_info").submit((event)=>{
            event.preventDefault()
            formData = []
            $(event.target).serializeArray().map((data)=>formData.push([data.name,data.value]))
            formData = Object.fromEntries(formData)
            console.log(formData);
            $.ajax({
                type: 'POST',
                url: formData.link,
                data:formData,
                success: function (data) {
                    console.log(data);
                    $('#cardModal').modal('show')
                },
                error: function (r) {
                    console.log(r);
                }
            });
        })
	    $("#country_selector").countrySelect({
			preferredCountries: ['ca', 'gb', 'us']
		});
	</script>
    <script>
        try {
        fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
            return true;
        }).catch(function(e) {
            var carbonScript = document.createElement("script");
            carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
            carbonScript.id = "_carbonads_js";
            document.getElementById("carbon-block").appendChild(carbonScript);
        });
        } catch (error) {
        console.log(error);
        }
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <!-- expiry -->
    <script>
        var $cc = {}
        $cc.expiry = function(e){
        if (e.key != 'Backspace'){
            var number = String(this.value);

            //remove all non-number character from the value
            var cleanNumber = '';
            for (var i = 0; i<number.length; i++){
            if (i == 1 && number.charAt(i) == '/'){
                cleanNumber = 0 + number.charAt(0);
            }
            if (/^[0-9]+$/.test(number.charAt(i))){
                cleanNumber += number.charAt(i);
            }
            }

            var formattedMonth = ''
            for (var i = 0; i<cleanNumber.length; i++){
            if (/^[0-9]+$/.test(cleanNumber.charAt(i))){
                //if the number is greater than 1 append a zero to force a 2 digit month
                if (i == 0 && cleanNumber.charAt(i) > 1){
                formattedMonth += 0;
                formattedMonth += cleanNumber.charAt(i);
                formattedMonth += '/';
                }
                //add a '/' after the second number
                else if (i == 1){
                formattedMonth += cleanNumber.charAt(i);
                formattedMonth += '/';
                }
                //force a 4 digit year
                else if (i == 2 && cleanNumber.charAt(i) <2){
                formattedMonth += '20' + cleanNumber.charAt(i);
                }else{
                formattedMonth += cleanNumber.charAt(i);
                }

            }
            }
            this.value = formattedMonth;
        }
        }

    </script>
  </body>
</html>
