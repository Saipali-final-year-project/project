var base_url = "http://localhost/codelgniter/project/";
$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});

/** */


/** */

function  Category(answer){
    // console.log(answer.value);
    if (answer.value == 'Livestock & poultry') {
        document.getElementById('type1').classList.remove('category1');
    }else{
        document.getElementById('type1').classList.add('category1');
    }

    if (answer.value == 'Animals Feeds') {
        document.getElementById('type2').classList.remove('category2');
    }else{
        document.getElementById('type2').classList.add('category2');
    }
    if (answer.value == 'Agro-Machinery') {
        document.getElementById('type3').classList.remove('category3');
    }else{
        document.getElementById('type3').classList.add('category3');
    }


};


function Location(answer){
    // console.log(answer.value);
     if (answer.value == 'Central') {
         document.getElementById('district1').classList.remove('location1');
     }else{
         document.getElementById('district1').classList.add('location1');
     }
 
     if (answer.value == 'Western') {
         document.getElementById('district2').classList.remove('location2');
     }else{
         document.getElementById('district2').classList.add('location2');
     }
     if (answer.value == 'Eastern') {
         document.getElementById('district3').classList.remove('location3');
     }else{
         document.getElementById('district3').classList.add('location3');
     }
     if (answer.value == 'Northern') {
      document.getElementById('district4').classList.remove('location4');
  }else{
      document.getElementById('district4').classList.add('location4');
  }

 
 };




jQuery(document).ready(function () {
    ImgUpload();
  });
  
  function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];
  
    $('.upload__inputfile').each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
        var maxLength = $(this).attr('data-max_length');
  
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {
  
          if (!f.type.match('image.*')) {
            return;
          }
  
          if (imgArray.length > maxLength) {
            return false
          } else {
            var len = 0;
            for (var i = 0; i < imgArray.length; i++) {
              if (imgArray[i] !== undefined) {
                len++;
              }
            }
            if (len > maxLength) {
              return false;
            } else {
              imgArray.push(f);
  
              var reader = new FileReader();
              reader.onload = function (e) {
                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                imgWrap.append(html);
                iterator++;
              }
              reader.readAsDataURL(f);
            }
          }
        });
      });
    });
  
    $('body').on('click', ".upload__img-close", function (e) {
      var file = $(this).parent().data("file");
      for (var i = 0; i < imgArray.length; i++) {
        if (imgArray[i].name === file) {
          imgArray.splice(i, 1);
          break;
        }
      }
      $(this).parent().parent().remove();
    });
  }
  
  // $("#submit").click(function(){
  //   var categories = $("#categories").val();
  //   var region = $("#region").val();
  //   if (categories == '' ) {
      //alert("Please Enter Category");
  //     sweetAlert("Empty Field...", "Please Enter Categories !!", "error")
  //   } else if( region == ''){
  //     alert("Please Enter Region"); 
  //   }
  // })
    

