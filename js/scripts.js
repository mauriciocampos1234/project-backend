$(function() {
        $('nav.mobile').click(function() {
            var listaMenu = $('nav.mobile ul');
            if(listaMenu.is(':hidden') == true) {            
                var icone = $('.botao-menu-mobile').find('i');
                icone.removeClass('fa-bars').addClass('fa-times');
                listaMenu.slideToggle();
            }
            else{            
                var icone = $('.botao-menu-mobile').find('i');
                icone.removeClass('fa-times').addClass('fa-bars');
                listaMenu.slideToggle();            
            }        
        })

    /*******FIM MENU RESPONSIVO******/

    if($('target').length > 0) {
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({scrollTop:divScroll},2000);
    }
    /*******FIM SCROLL SERVIÇOS E DEPOIMENTOS******/

    carregarDinamico();
        function carregarDinamico() {
                $('[realtime]').click(function(){
                    var pagina = $(this).attr('realtime');
                    $('.container-principal').hide();
                    $('.container-principal').load(include_path+'pages/'+pagina+'.php');
                    
                    setTimeout(function(){
                        initMap();
                        addMarker(-23.400590,-45.884710,'',"Minha casa",undefined,false);
                    },1000);

                    $('.container-principal').fadeIn(1000);
                    
                    return false;
                })
            }
    async function initMap() {
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
    const map = new Map(document.getElementById("map"), {
    center: { lat: -23.400590, lng: -45.884710 },
    zoom: 14,
    mapId: "4504f8b37365c3d0",
    });
    
    const draggableMarker = new AdvancedMarkerElement({
    map,
    position: { lat: -23.400590, lng: -45.884710 },
    gmpDraggable: true,
    title: "This marker is draggable. Click to remove.",
    });
    
    draggableMarker.addListener("click", (event) => {
    // Remove AdvancedMarkerElement from Map
    draggableMarker.map = null;
    });
    map.addListener("click", (event) => {
    // Set AdvancedMarkerView position and add to Map
    draggableMarker.position = event.latLng;
    draggableMarker.map = map;
    })
}

    initMap();
    /*******FIM MAPA******/
}); 



