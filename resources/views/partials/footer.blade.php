<footer class="py-80px">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mb-5 mb-lg-0">
               <img src="{{ url('assets/images/logo.png' )}}" alt="Logo" class="h-32px mb-4"> 
                <p class="text-white">Empowering Laramus<br/>to connect share join and learn</p>
            </div>
            <div class="col-12 col-lg-6 me-auto">
                <div class="d-flex flex-column flex-lg-row justify-content-end">
                    <div class="d-flex flex-column me-140px mb-3 mb-lg-0">
                    <p class="fw-bold fs-5 text-white text-nowrap">
                        Contact Us
                    </p>
                    <ul class="list unstyled">
                       <li class="text-white"><a href ="mailto:hi@laramus.com">hi@laramus.com</a>
                    </ul>
                    </div>
                    <div class="d-flex flex-column">
                        <p class="fw-bold fs-5 text-white">Links</p>
                        <ul class="list unstyled">
                            <li class="text-white mb-2"><a href ="{{ route('home') }}">Home</a></li>
                            <li class="text-white mb-2"><a href ="{{ route('discussions.index') }}">Discussions</a></li>
                            <li class="text-white mb-2"><a href ="#">About Us</a></li>
                         </ul>
                    </div>
                </div>
        </div>
    </div>
</footer>