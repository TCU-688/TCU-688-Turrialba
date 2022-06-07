<?php
include_once 'public/header.php';
?>

<section class="section-padding pb-0" id="infoTcu">
    <div class="container mb-5 pb-lg-5">
        <div class="row">
            <div class="col-lg-6 col-12 mt-3 mb-lg-5 feature-box-1">
                <h2 class="mb-3" data-aos="fade-up">Misión</h2>
                <p class="me-4" data-aos="fade-up" data-aos-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat</p>
            </div>

            <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5 feature-box-1">
                <h2 class="mb-3" data-aos="fade-up">Visión</h2>
                <p data-aos="fade-up" data-aos-delay="500">This Bootstrap 5 layout is free to use for your business. You are allowed to edit it in any way you like. However, please do not redistribute this template ZIP file for a template download purpose on any other website such as Free CSS collections.</p>
            </div>
            <div class="col-lg-6 col-12 mt-3 mb-lg-5 feature-box-1">
                <h2 class="mb-3" data-aos="fade-up">Objectivos</h2>
                <p class="me-4" data-aos="fade-up" data-aos-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat</p>
            </div>
        </div>
    </div>
</section>
<section class="section-padding" id="libros">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-5 text-center" data-aos="fade-up">Libros</h2>
            </div>
            <div class="panel panel-primary filterable" data-aos="fade-up">
                <div class="panel-heading">
                    <h3 class="panel-title">Libros TCU</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtrar</button>
                    </div>
                </div>
                <table class="table table-hover table-bordered">
                    <thead class="tabla">
                        <tr class="filters">
                            <th><input type="text" class="form-control" placeholder="#" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Nombre" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Resumen" disabled></th>
                            <th>Descargar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<section class="news section-padding" id="comunidades">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-5 text-center" data-aos="fade-up">Comunidades</h2>
            </div>

            <div class="col-md-4">
                <div class="card lugar card-blog">
                    <div class="card-image image">
                        <a href="#">
                            <img class="img img-raised" src="public/img/f0f6d7da-1c03-4535-8d38-4b9174b66295.jpg">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                    <div class="table">
                        <h4 class="card-caption">Tuis</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="google-map" id="contactos">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.39231162523!2d-83.67413988504319!3d9.901246577443095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0d42417bc6851%3A0xd2ae13fcaa9ce072!2sUniversidad%20de%20Costa%20Rica%20(Sede%20del%20Atl%C3%A1ntico)!5e0!3m2!1ses!2scr!4v1654577240184!5m2!1ses!2scr" class="map-iframe" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<?php
include_once 'public/footer.php';
?>