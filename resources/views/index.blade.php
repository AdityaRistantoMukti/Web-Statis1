<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="jumbotron jumbotron-fluid" style="background-color: #ffff">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h1 class="display-5 text-success" style="font-weight:bold; margin-top:9px;">My Curriculum vitage</h1>
                <svg id="aeb423dd-03ff-4648-8e09-4c1290dce31f" style="margin-left:60px; border-bottom-style: solid;
                border-bottom-width:thin" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="300px" height="150px" viewBox="0 0 940.22097 467.48375"><path d="M775.91757,683.21108v-72.34S804.10924,662.15705,775.91757,683.21108Z" transform="translate(-129.88952 -216.25813)" fill="#f1f1f1"/><path d="M777.659,683.19835,724.36941,634.2771S781.21461,648.19264,777.659,683.19835Z" transform="translate(-129.88952 -216.25813)" fill="#f1f1f1"/><rect id="eeb7425a-d208-4c0d-b95e-02be1fa43e7d" data-name="Rectangle 62" x="0.27109" y="17.4297" width="635.75697" height="301.67771" fill="#e6e6e6"/><rect id="ac098a7d-41e7-4a0b-9ebb-e2b896279a43" data-name="Rectangle 75" x="18.45077" y="43.29909" width="599.39849" height="251.69914" fill="#fff"/><rect id="f3d044d2-f865-40f6-878a-97b0cdf0b076" data-name="Rectangle 80" width="635.75697" height="27.00885" fill="#6c63ff"/><circle id="a41597d3-4560-43a6-897a-86e327d3ab8c" data-name="Ellipse 90" cx="20.07093" cy="12.49284" r="5.00599" fill="#fff"/><circle id="a8db4b27-72ff-467a-b7ca-497e0ce2cc93" data-name="Ellipse 91" cx="39.07201" cy="12.49284" r="5.00599" fill="#fff"/><circle id="ba9869b1-9707-4207-be3c-61cfbe485fac" data-name="Ellipse 92" cx="58.07398" cy="12.49284" r="5.00599" fill="#fff"/><path d="M683.11777,444.97173v-2h11.88916l.0769,1.99854-.03833.001Zm-11.88916,0H659.33944v-2h11.88917Zm-23.77833,0H635.56137v-2h11.88891Zm-23.77807,0H611.78305v-2h11.88916Zm-23.77832,0H588.00473v-2h11.88916Zm-23.77832,0H564.22641v-2h11.88916Zm-23.77832,0H540.44833v-2h11.88892Zm-23.77808,0H516.67v-2h11.88916Zm-23.77832,0H494.214a3.07682,3.07682,0,0,1-1.80835-.61279l1.16455-1.626a1.10935,1.10935,0,0,0,.646.23877h10.5647Zm194.94434-11.38037h-2V421.7022h2ZM491.49569,432.313h-2V420.42388h2Zm208.2295-22.5h-2V397.92388h2Zm-208.2295-1.27832h-2V396.64605h2Zm208.2295-22.5h-2V374.14556h2Zm-208.2295-1.27783h-2V372.86773h2Zm208.2295-22.5h-2V350.36773h2Zm-208.2295-1.27832h-2V349.08941h2Zm208.2295-22.5h-2v-4.02881c-.002-3.37256-1.08277-5.67041-2.08618-6.37744l1.15185-1.63477c1.78052,1.2544,2.93213,4.39942,2.93433,8.01172Zm-208.2295-1.27832h-2v-2.75049c0-4.86572,2.01221-8.56641,4.68067-8.60791l.03125,2c-1.13233.01758-2.71192,2.54-2.71192,6.60791Zm192.92237-9.3584H672.5289v-2h11.88916Zm-23.77832,0H648.75058v-2h11.88916Zm-23.77832,0H624.97226v-2h11.88916Zm-23.77808,0H601.19418v-2h11.88916Zm-23.77832,0H577.41586v-2H589.305Zm-23.77832,0H553.63754v-2H565.5267Zm-23.77832,0H529.85922v-2h11.88916Zm-23.77832,0H506.08114v-2h11.88892Z" transform="translate(-129.88952 -216.25813)" fill="#e4e4e4"/><rect id="bf5c6f7d-d465-4263-a791-6917df506e29" data-name="Rectangle 81" x="77.78926" y="116.62313" width="122.56045" height="7.03573" fill="#e6e6e6"/><rect id="f8f2b1f1-beba-472f-8554-cd71efd3f80f" data-name="Rectangle 82" x="77.78926" y="142.28652" width="189.26053" height="7.03573" fill="#6c63ff"/><rect id="fb4599b7-18da-45bc-afb0-01dc7e2f7680" data-name="Rectangle 83" x="77.78926" y="166.46384" width="154.24264" height="7.03573" fill="#e6e6e6"/><rect id="fd7cd703-6235-43d3-ac2b-600a626f2c8b" data-name="Rectangle 84" x="77.78926" y="190.55201" width="90.04477" height="7.03573" fill="#e6e6e6"/><rect id="b510e3d8-1d90-415c-a9f7-f3077d64661d" data-name="Rectangle 85" x="77.78926" y="214.63847" width="135.90064" height="7.03573" fill="#e6e6e6"/><path d="M805.506,377.71564a9.68076,9.68076,0,0,0,13.46821-6.24182l34.31588-2.43529-10.87357-14.19011-30.9199,4.4881a9.73323,9.73323,0,0,0-5.99062,18.37912Z" transform="translate(-129.88952 -216.25813)" fill="#9e616a"/><path d="M939.05265,356.0311l10.80561-6.25239a14.7599,14.7599,0,0,0,5.86567-19.26271l.37078-.11958a15.16693,15.16693,0,0,0-17.54573-7.6238L821.72425,353.86718l4.22434,27.992Z" transform="translate(-129.88952 -216.25813)" fill="#3f3d56"/><path id="f8ab5adf-0050-4313-a3fc-6665da3c3657" data-name="Path 138" d="M833.55034,486.25946H632.75725c-2.05227-.00522-3.71575-3.40736-3.71836-7.608V376.7378c0-4.19978,1.66609-7.601,3.71836-7.608H833.55034c2.05226.00523,3.71574,3.40737,3.71835,7.608V478.65056C837.26608,482.85034,835.59994,486.25418,833.55034,486.25946Z" transform="translate(-129.88952 -216.25813)" fill="#fff"/><g id="b9db5941-fd9d-4256-9412-6bd09c2c2e67" data-name="Group 38"><circle id="b0c1df6c-9d28-49f1-a1f9-a4de637a1a39" data-name="Ellipse 7" cx="567.44302" cy="193.2216" r="17.55831" fill="#3f3d56"/><path id="f27b48c9-eb3a-4b88-89bc-f1c9b7ad6b59" data-name="Path 63" d="M752.39347,463.58662h-86.135a1.76324,1.76324,0,0,1-.32153-.02621l40.73962-70.56263a2.8517,2.8517,0,0,1,4.96513,0l27.34,47.35337,1.31051,2.26543Z" transform="translate(-129.88952 -216.25813)" fill="#6c63ff"/><path id="fc8cace5-23bc-4b5f-a7ba-908e5d1307f5" data-name="Path 65" d="M800.35056,463.5875H725.85025L740.286,442.61922l1.0388-1.51059,18.81205-27.32689a3.80658,3.80658,0,0,1,5.65443-.33723,3.39881,3.39881,0,0,1,.27084.33723Z" transform="translate(-129.88952 -216.25813)" fill="#6c63ff"/></g><path id="b543a181-e408-4cd3-9028-b57a4db0547e" data-name="Path 138" d="M833.55034,486.25946H632.75725c-2.05227-.00522-3.71575-3.40736-3.71836-7.608V376.7378c0-4.19978,1.66609-7.601,3.71836-7.608H833.55034c2.05226.00523,3.71574,3.40737,3.71835,7.608V478.65056C837.26608,482.85034,835.59994,486.25418,833.55034,486.25946ZM632.75725,372.1728c-1.23187,0-2.22963,2.04528-2.23139,4.56494V478.65056c0,2.51966.99947,4.56233,2.23139,4.565H833.55034c1.23186,0,2.22962-2.04443,2.23138-4.565V376.7378c0-2.51967-.99947-4.56234-2.23138-4.565Z" transform="translate(-129.88952 -216.25813)" fill="#e6e6e6"/><circle cx="801.76692" cy="62.69207" r="23.72361" fill="#9e616a"/><path d="M948.44444,297.71924c-4.42575,4.71437-12.645,2.18359-13.22164-4.25691a7.7805,7.7805,0,0,1,.00979-1.50265c.29775-2.85287,1.94592-5.44292,1.55112-8.45514a4.4339,4.4339,0,0,0-.81146-2.07565c-3.52676-4.72263-11.80555,2.11231-15.134-2.163-2.04092-2.62149.35816-6.74889-1.208-9.67885-2.06709-3.86707-8.18973-1.95944-12.02926-4.07724-4.272-2.35631-4.01644-8.9107-1.20435-12.89742,3.42947-4.862,9.44242-7.45632,15.38045-7.83022s11.83515,1.23129,17.37884,3.39173c6.29874,2.45469,12.54486,5.84712,16.421,11.38563,4.71382,6.73541,5.16745,15.79054,2.81,23.66635C956.95285,288.01685,952.05854,293.86945,948.44444,297.71924Z" transform="translate(-129.88952 -216.25813)" fill="#2f2e41"/><polygon points="815.218 455.858 803.985 455.858 798.641 412.531 815.22 412.532 815.218 455.858" fill="#9e616a"/><path d="M947.97189,683.00478l-36.21937-.00134v-.45812A14.09835,14.09835,0,0,1,925.85011,668.448h.00089l22.12156.0009Z" transform="translate(-129.88952 -216.25813)" fill="#2f2e41"/><polygon points="725.742 455.491 714.815 452.884 719.67 409.5 735.796 413.347 725.742 455.491" fill="#9e616a"/><path d="M855.8915,683.00478l-35.23078-8.4044.10628-.44562a14.09834,14.09834,0,0,1,16.98359-10.442l.00087.0002,21.51775,5.1332Z" transform="translate(-129.88952 -216.25813)" fill="#2f2e41"/><path d="M883.95694,450.00988,839.92421,657.61463l27.57736-1.66872L915.04941,538.287l7.16612,118.783,30.12274,1.784-.36784-172.046s12.56649-27.04979,1.669-41.81653S883.95694,450.00988,883.95694,450.00988Z" transform="translate(-129.88952 -216.25813)" fill="#2f2e41"/><path d="M949.582,312.73714l-26.68263-.59445-3.21885,0c-12.8098,10.43614-18.1913,33.65952-19.99053,50.08409l-19.24631,97.81977s48.73975,13.904,76.44148-2.32592l1.54865-64.11016S965.27382,328.429,949.582,312.73714Z" transform="translate(-129.88952 -216.25813)" fill="#3f3d56"/><path d="M821.814,455.62326a9.68076,9.68076,0,0,0,8.66062-12.056l28.68689-18.98876L842.71715,417.566,817.9967,436.67313a9.73323,9.73323,0,0,0,3.81733,18.95013Z" transform="translate(-129.88952 -216.25813)" fill="#9e616a"/><path d="M942.86666,354.32712l6.3367-10.75639a14.75991,14.75991,0,0,0-4.36048-19.65819l0,0a14.75992,14.75992,0,0,0-18.763,1.69906L824.21494,426.88278l17.43824,22.30033Z" transform="translate(-129.88952 -216.25813)" fill="#3f3d56"/><path d="M1069.11048,683.74187h-381a1,1,0,0,1,0-2h381a1,1,0,0,1,0,2Z" transform="translate(-129.88952 -216.25813)" fill="#cacaca"/><rect x="464.15481" y="160.99836" width="2.53839" height="18.93847" fill="#e4e4e4"/><polygon points="475.806 169.409 473.946 171.141 465.426 161.973 456.904 171.141 455.045 169.409 465.426 158.246 475.806 169.409" fill="#e4e4e4"/><path d="M594.61044,405.71392a20.30713,20.30713,0,1,1,20.30713-20.30713A20.3301,20.3301,0,0,1,594.61044,405.71392Zm0-38.07587a17.76874,17.76874,0,1,0,17.76874,17.76874A17.7888,17.7888,0,0,0,594.61044,367.63805Z" transform="translate(-129.88952 -216.25813)" fill="#e4e4e4"/></svg>
             </div>
        </div>
     </div>

      <!-- Image -->
     <div class="text-center">
        <img src="{{ asset('images/logo2.jpg') }}" class="rounded-circle shadow" width="60px" height="60px"style="margin-top:-60px">
      </div>
      
      <div class="container">
        <div class="row">
          <div class="col-md-4 mt-4">
            
            <h3 class="text-success" style="font-weight: bold;">Aditya Ristanto Mukti</h3>
            <p>Adit</p>
            <p class="lead">nakreload@gmail.com</p>
            <a href="" class="btn btn-outline-primary btn-md btn-block">Edit Profil</a>

            <div class="row">
              <div class="col-md-4 mt-3">
                <p class="lead"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                </svg> 50 followers</p> 
              </div>
              
              <div class="row">
                <div class="col-md-4 mt-3">
                  <p class="lead">0 following</p>
                 </div>

                 
                  <div class="col-md-4 mt-3 ml-4">
                 <p class="lead"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                </svg> 50 likes</p> 
                  </div>
              
              </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> 
            </svg> Indonesia

            <h3 class="mt-3 text-success" style="font-weight: bold">Highlights</h3>
            <p class="fs-5">Arctic Code Vault Contributor</p>
          </div>
          <div class="col-md-8">
            <div class="card ">
              <div class="card-body ">
                <h3 class="text-success " style="font-weight: bold">Pinned</h3>

                <div class="row">
                  <div class="col-md-6  ">
                    <div class="card">
                      <div class="card-body" style="font-style: italic">
                        <h4 class="text-success" style="font-weight: bold">Project -1</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                        </svg> php
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-body" style="font-style: italic">
                        <h4 class="text-success" style="font-weight: bold">Project -2</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                        </svg> php  
                      </div>
                    </div>
                  </div>
                </div>
                <h3 class="text-success mt-2" style="font-weight: bold"> Contribution activity</h3>
                <p>Mei 2021</p>
                      <div class="col-md-12">
                        <p class="mb-1">Created & commits in 3 repositories </p>
                        <div class="d-flex">
                        <p class="mb-1">Username/projects 4 commits</p>
                            <div class="ml-auto">
                              <div class="btn btn-primary btn-sm btn-block" style="margin-right: 300px"></div>
                          </div>
                          </div>
                          <div class="d-flex">
                            <p class="mb-1">Username/projects 4 commits</p>
                                <div class="ml-auto">
                                  <div class="btn btn-primary btn-sm btn-block" style="margin-right: 300px"></div>
                              </div>
                              </div>
                              <div class="d-flex">
                                <p class="mb-1">Username/projects 4 commits</p>
                                    <div class="ml-auto">
                                      <div class="btn btn-primary btn-sm btn-block" style="margin-right: 300px"></div>
                                  </div>
                                  </div>
                          <div class="btn btn-outline-secondary btn-sm btn-block mt-2">Show more activitys</div>
                          <div class="d-flex mt-2">
                            <p class="text-success" style="font-weight: bold;">Project Name</p>
                            <div class="ml-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                              </svg> 10
                            </div>
                          </div>
                          <p class="text-secondary" style="border-bottom: 1px solid">php  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                          </svg> 10 update 3 day ago</p>
                          <div class="d-flex mt-2">
                            <p class="text-success" style="font-weight: bold;">Project Name</p>
                            <div class="ml-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                              </svg> 10
                            </div>
                          </div>
                          <p class="text-secondary" style="border-bottom: 1px solid">php  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                          </svg> 10 update 3 day ago</p>
                          <div class="d-flex mt-2">
                            <p class="text-success" style="font-weight: bold;">Project Name</p>
                            <div class="ml-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                              </svg> 10
                            </div>
                          </div>
                          <p class="text-secondary" style="border-bottom: 1px solid">php  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                          </svg> 10 update 3 day ago</p>
                          <div class="d-flex mt-2">
                            <p class="text-success" style="font-weight: bold;">Project Name</p>
                            <div class="ml-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                              </svg> 10
                            </div>
                          </div>
                          <p class="text-secondary" style="border-bottom: 1px solid">php  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                          </svg> 10 update 3 day ago</p>
                   </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center p-3 mt-2" style="background-color: #ffff">
        @copyright Aditya Ristanto Mukti, all reserved 2021.
      </div>
      </body>
</html>

