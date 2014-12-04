/* jshint undef: false */
'use strict';
(function($,window,ebscoHostSearchGo,undefined){

  var tabs = function(){
   $('.tabs').each(function(){
      // For each set of tabs, we want to keep track of
      // which tab is active and it's associated content
      var $active, $content, $links = $(this).find('a');

      // If the location.hash matches one of the links, use that as the active tab.
      // If no match is found, use the first link as the initial active tab.
      $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
      $active.addClass('section-selected');

      $content = $($active[0].hash);

      // Hide the remaining content
      $links.not($active).each(function () {
        $(this.hash).hide();
      });

      // Bind the click event handler
      $(this).on('click', 'a', function(e){
        // Make the old tab inactive.
        $active.removeClass('section-selected');
        $content.hide();

        // Update the variables with the new link and content
        $active = $(this);
        $content = $(this.hash);

        // Make the tab active.
        $active.addClass('section-selected');
        $content.show();

        // Prevent the anchor's default click action
        e.preventDefault();
      });
    });
  };

  var slides = function(element){
    var $element = $(element);
    var slides = $element.find('.slider-box').find('.slider-element');
    var len = slides.length;
    var index = 0;
    var leftBtn = $element.next().find('.slider_left');
    var rightBtn = $element.next().find('.slider_right');

    leftBtn.click(function(){
      if( (index-1) >= 0){
        $(slides[index]).css('transform','translateX(+1000px)');
        index--;
        $(slides[index]).css('transform','translateX(0px)');
      }
    });

    rightBtn.click(function(){
      if( (index+1) < len ){
        $(slides[index]).css('transform','translateX(-1000px)');
        index++;
        $(slides[index]).css('transform','translateX(-1000px)');
      }
    });
  };

  $(document).ready(function(){
    
    $.slidebars();

    slides('#slider-news');

    $('#ebscoSearch').on('submit',function(e){
      ebscoHostSearchGo(this);
      e.preventDefault();
    });

    var header = $('header.fixed');
    $(window).scroll(function(){
      if( $(window).scrollTop() > 0){
        header.addClass('onTop');
      }else{
        header.removeClass('onTop');
      }

    });

    tabs();

    var hash = window.location.hash.replace('#','');
    if(hash === 'organigrama' || hash === 'mision'){
      $('.tabs a').removeClass('section-selected');
      $('.tabs a[href="'+hash+'"]').click();
    }

    if(window.location.pathname === '/recursos_por_area'){
      var facultades = [
      {
        'facultad':'Ciencias de la Salud',
        'id':'salud',
        'carreras':[
          {'carrera':'Enfemería','url':'enfermeria'},
          {'carrera':'Nutrición','url':'nutricion'},
          {'carrera':'Medicina','url':'medicina'},
          {'carrera':'Kinesiología','url':'kinesiologia'},
          {'carrera':'Psicología','url':'psicologia'}
        ]
      },{
        'facultad':'Ciencias de la Ingeniería',
        'id':'ingenieria',
        'carreras':[
          {'carrera':'Ingeniería en Construcción','url':'construccion'},
          {'carrera':'Ingeniería Civil Informática','url':'informatica'}
        ]  
      },
      {
        'facultad':'Ciencias de la Básicas',
        'id':'basicas',
        'carreras':[
          {'carrera':'Pedagogía en Ciencias','url':'pciencias'},
          {'carrera':'Pedagogía en Matemáticas y Computación','url':'matematica'}
      ]},
      {
        'facultad':'Ciencias de la Educación',
        'id':'educacion',
        'carreras':[
          {'carrera':'Educación parvularia','url':'parvularia'},
          {'carrera':'Educación Especial','url':'especial'},
          {'carrera':'Pendagogía en Lenguaje','url':'lengua'},
          {'carrera':'Educación Física','url':'edfisica'},
          {'carrera':'Educación Básica','url':'basica'},
          {'carrera':'Educación Básica con mención','url':'basicamencion'},
          {'carrera':'Pedagogía en Inglés','url':'ingles'}
        ]
      },
      {
        'facultad':'Ciencias Religiosas y Filosóficas',
        'id':'religion',
        'carreras':[
          {'carrera':'Religión y Filosofía','url':'religion'}
        ]
      },
      {'facultad':'Ciencias Sociales y Económicas',
      'id':'sociales',
      'carreras':[{'carrera':'Auditoria','url':'auditoria'},
      {'carrera':'Sociologia','url':'sociologia'},
      {'carrera':'Ingeniería Comercial','url':'comercial'},
      {'carrera':'Trabajo Social','url':'trabajosocial'}
      ]},
      {
        'facultad':'Ciencias Agrarias y Forestales',
        'id':'forestal',
        'carreras':[{'carrera':'Agronomía','url':'agronomia'},
      {'carrera':'Forestal','url':'forestal'},
      {'carrera':'Biotecnología','url':'biotecnologia'}
      ]}
    ];
      var tpl1 = '<option></option>';
      var drawCarreras = function(carreras){
        $('select#carreras').empty()
        .html('<option value="" disabled selected>Carrera</option>');
        _.each(carreras,function(c){
          var op = $(tpl1).attr('data-url',c.url);
          op.html(c.carrera);
          $('select#carreras').append(op);
        });
      };
      
      
      _.each(facultades,function(val){
        var op =$(tpl1).attr('data-id',val.id);
        op.html(val.facultad);
        $('select#facultades').append(op);  
      });
      
      
      $('select#facultades').change(function(){
        var id = $('select#facultades option:selected').attr('data-id');
        var facultad = _.find(facultades,function(f){
          return f.id === id;
        });
        drawCarreras(facultad.carreras);
      });

      $('#searchRecurso').click(function(){
        var carrera = $('select#carreras option:selected').attr('data-url');
        if(carrera!==null && carrera!=='' && carrera!==undefined){
          window.open("http://guiastematicas.biblioteca.ucm.cl/"+carrera);  
        }
      });
    }

  });
}($,window,ebscoHostSearchGo));