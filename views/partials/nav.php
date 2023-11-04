<!-- Navigation -->
<div class="cd-slider-nav">
    <nav class="navbar">
        <div class="tm-navbar-bg">
            <!-- <a class="navbar-brand text-uppercase" href="index.html" data-no="1"> -->
            <a class="navbar-brand text-uppercase" href="/">
                <img loading="lazy" src="imga/logo-tatan-blanco.png" class="logo-tatan" />
                <b class="tatan-titulo">Tatan González</b>
                <div class="natura">- Fotografía y Naturaleza</div>
            </a>

            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item <?= urlIs('/') ? 'active selected' : '' ?>">
                        <!-- <a class="nav-link" href="#0" data-no="1"><b>Flora y Fauna</b><span class="sr-only">(current)</span></a> -->
                        <a class="nav-link" href="/"><b>Flora y Fauna</b><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?= urlIs('/paisajes') ? 'active selected' : '' ?>">
                        <!-- <a class="nav-link" href="#0" data-no="2"><b>Paisajes Mágicos</b></a> -->
                        <a class="nav-link" href="/paisajes"><b>Paisajes Mágicos</b></a>
                    </li>
                    <li class="nav-item <?= urlIs('/sesiones') ? 'active selected' : '' ?>">
                        <!-- <a class="nav-link" href="#0" data-no="3"><b>Sesiones</b></a> -->
                        <a class="nav-link" href="/sesiones"><b>Sesiones</b></a>
                    </li>
                    <li class="nav-item <?= urlIs('/tarifa') ? 'active selected' : '' ?>">
                        <!-- <a class="nav-link" href="#0" data-no="4"><b>Tarifas</b></a> -->
                        <a class="nav-link" href="/tarifa"><b>Tarifas</b></a>
                    </li>
                    <li class="nav-item <?= urlIs('/contacto') ? 'active selected' : '' ?>">
                        <!-- <a class="nav-link" href="#0" data-no="5"><b>Contacto</b></a> -->
                        <a class="nav-link" href="/contacto"><b>Contacto</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>