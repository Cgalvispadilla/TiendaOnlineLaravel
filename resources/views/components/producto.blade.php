 <li class="item">
    <!--box-slider-->
    <div class="box">
        <!--img-box-->
        <div class="slide-img">
            <img src="{{ asset('images/productos/'.$img) }}">
            <!--overlayer-->
            <div class="overlay">
                <!--buy-btn-->
                <a href="#" class="buy-btn">Comprar</a>
            </div>
        </div>
        <!--detail-box-->
        <div class="detail-box">
            <!--producto-->
            <div class="tipo">
                <a href="#">{{ $nombre }} </a>
                <span>Núevo</span>
            </div>
            <!--price-------->
            <a href="#" class="precio">{{ $precio }} </a>
        </div>
    </div>
</li>      