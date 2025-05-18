<main>
    <!-- Profile Section -->
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card mb-4 shadow-sm">
                <div class="card-body text-center">
                    <div class="mt-2 mb-4">
                        <img src="{{ asset('front/images/profile.jpg') }}" class="rounded-circle img-fluid" style="width: 90px;" />
                    </div>
                    <h5 class="my-3">ARDRA RIANISA</h5>
                    <p class="text-muted mb-1">Fakultas Ilmu Komputer</p>
                    <p class="text-muted mb-4">Sistem Informasi</p>
                    <div class="d-flex justify-content-center mb-2">
                        <button type="button" class="btn btn-outline-primary ms-1">Tangerang</button>
                        <button type="button" class="btn btn-outline-primary ms-1">16 April 2025</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PROFILE -->

    <!-- About Me Section -->
    <div class="card-body p-4 text-black" style="background-color: #d4f1dc;"> <!-- Background hijau muda -->
        <p class="lead fw-normal mb-1 text-center" style="font-family: 'Roboto', sans-serif;"><i class="fa fa-user"></i> ABOUT ME</p> <!-- Icon untuk About Me -->
        <div class="p-4">
            <p class="font-italic mb-1 text-justify" style="font-family: 'Roboto', sans-serif;">Halo, saya Ardra Rianisa, seorang mahasiswa di jurusan Sistem Informasi di Fakultas Ilmu Komputer. Hobi saya adalah berenang, dan saya senang mengeksplorasi hal-hal baru. Saya juga sangat tertarik dengan alam dan lingkungan, selalu mencari cara untuk terhubung dengan dunia alam.</p>
        </div>
    </div>
    <!-- END ABOUT -->

    <!-- Social Media Section -->
    <div class="card mb-4 mb-lg-0" style="margin-top: 20px;"> <!-- Added margin-top to create space -->
        <div class="card-body p-0" style="border: 1px solid #ddd; border-radius: 10px; padding: 10px; background-color: #d4f1dc;">
            <p class="text-center" style="font-family: 'Roboto', sans-serif;"><i class="fa fa-share-alt"></i> <strong>Follow Me on Social Media</strong></p> <!-- Icon untuk Social Media -->
            <div class="d-flex justify-content-center flex-wrap">
                <!-- Website Button -->
                <a href="https://sso.esaunggul.ac.id/dashboard" class="btn btn-outline-primary m-2">
                    <i class="fa fa-globe" style="font-size: 20px; margin-right: 10px;" aria-hidden="true"></i> My Website
                </a>
                <!-- Instagram Button -->
                <a href="https://instagram.com/ardrarryy" class="btn btn-outline-primary m-2">
                    <i class="fab fa-instagram" style="font-size: 20px; margin-right: 10px;" aria-hidden="true"></i> My Instagram
                </a>
                <!-- GitHub Button -->
                <a href="https://github.com/dashboard" class="btn btn-outline-primary m-2">
                    <i class="fab fa-github" style="font-size: 20px; margin-right: 10px;" aria-hidden="true"></i> My Github
                </a>
                <!-- Facebook Button -->
                <a href="https://www.facebook.com/share/19EtX7qUVo/?mibextid=wwXIfr" class="btn btn-outline-primary m-2">
                    <i class="fab fa-facebook-f" style="font-size: 20px; margin-right: 10px;" aria-hidden="true"></i> My Facebook
                </a>
            </div>
        </div>
    </div>
    <!-- END SOCIAL MEDIA LINKS -->

    <!-- Skills Section -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body text-center" style="background-color: #d4f1dc;">
                    <h5 class="mb-4" style="font-family: 'Roboto', sans-serif;"><i class="fa fa-cogs"></i> My Skills</h5> <!-- Icon untuk Skills -->
                    <div class="mb-4">
                        <p class="mb-1" style="font-size: .9rem; font-family: 'Roboto', sans-serif;">
                            <i class="fab fa-html5" style="font-size: 20px; margin-right: 10px;"></i> HTML
                        </p>
                        <div class="progress rounded mb-3" style="height: 8px;">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-1" style="font-size: .9rem; font-family: 'Roboto', sans-serif;">
                            <i class="fab fa-css3-alt" style="font-size: 20px; margin-right: 10px;"></i> CSS
                        </p>
                        <div class="progress rounded mb-3" style="height: 8px;">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SKILL -->
</main>

<!-- Bootstrap JS & Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"></script>