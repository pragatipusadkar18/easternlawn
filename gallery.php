<?php include "./include/header.php";
include "./admin/dbconn.php";
$sql = "SELECT * FROM gallery";
$conn->exec($sql);

?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/shaadi.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home<i class="fa fa-chevron-right"></i></a></span> <span>Gallery <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Gallery</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid available">
        <div class="container">
            <div class="row text-center">
                <?php foreach ($records as $gallery) { ?>
                    <div class="col-md-4 mt-5">
                        <div class="d-block services-wrap  contenedor-galeria ftco-animate">
                            <img src="admin/<?php echo $gallery['IMAGE_PATH'] ?>" style="width:100%;" alt="" class="img-galeria  zindex-fixed">
                            <p><?php echo $gallery['IMAGE_TEXT'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</section>


<section class="imagen-light">
    <i class="fas fa-times close-gallery"></i>
    <img src="./img/img-3.jpg" alt="" class="agregar-imagen">
</section>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');




    .contenedor {
        width: 90%;
        max-width: 1200px;
        overflow: hidden;
        margin: auto;
        padding: 60px 0;
        border-radius: 10px;
    }

    .subtitulo {
        text-align: center;
        font-weight: 700;
        color: #9f8ad0;
        margin-bottom: 40px;
        font-size: 40px;
    }


    .gallery {
        background: #f2f2f2;
    }

    .contenedor-galeria {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;

    }

    .img-galeria {
        object-fit: cover;
        width: 30%;
        display: block;
        margin-bottom: 15px;
        box-shadow: 0 0 6px rgb(0, 0, 0, 0.5);
        cursor: pointer;
        border-radius: 10px;
    }

    .img-galeria:hover {
        transition: all 0.3s ease-in-out;
        transform: scale(1.1);
    }

    .imagen-light {
        position: fixed;
        background: rgba(0, 0, 0, 0.6);
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        transform: translate(100%);
        transition: transform .2s ease-in-out;
    }

    .show {
        transform: translate(0);
    }

    .agregar-imagen {
        object-fit: cover;
        width: 60%;
        border-radius: 10px;
        transform: scale(0);
        transition: transform .3s .2s;
    }

    .showImage {
        transform: scale(1);
    }

    .close-gallery {
        position: absolute;
        top: 200px;
        right: 100px;
        width: 40px;
        cursor: pointer;
        color: #fff;
        font-size: 25px;
    }
</style>


<script>
    const imagenes = document.querySelectorAll('.img-galeria');
    const imagenesLight = document.querySelector('.agregar-imagen');
    const contenedorLight = document.querySelector('.imagen-light');

    imagenes.forEach(imagen => {
        imagen.addEventListener('click', () => {
            aparecerImagen(imagen.getAttribute('src'))

        })
    })

    contenedorLight.addEventListener('click', (e) => {
        if (e.target !== imagenesLight) {
            contenedorLight.classList.remove('show');
            imagenesLight.classList.remove('showImage');
        }
    })

    const aparecerImagen = (imagen) => {
        imagenesLight.src = imagen;
        contenedorLight.classList.add('show');
        imagenesLight.classList.add('showImage');
    }
</script>

<?php include "./include/footer.php";

?>