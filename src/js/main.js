const swiper = new Swiper(".swiper", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

var Mask = function () {
  let $loc = new Array();

  this.flag = function ($coord = ".js-input-flag") {
    if (document.querySelector($coord)) {
      document.addEventListener("DOMContentLoaded", function () {
        let input = document.querySelectorAll($coord);
        for (let itens of input) {
          window.intlTelInput(itens, {
            utilsScript: "./src/js/tellinput/utils.js",
          });
        }
      });
    }
  };

  this.mask = function ($obj = "00/00/0000", $coord = ".js-input-date") {
    if (document.querySelector($coord)) {
      document.addEventListener("DOMContentLoaded", function () {
        jQuery($coord).mask($obj);
      });
    }
  };

  this.cel = function ($coord = ".js-input-celular") {
    let $obj;
    if (document.querySelector($coord)) {
      document.addEventListener("DOMContentLoaded", function () {
        let input = document.querySelectorAll($coord);

        for (let itens of input) {
          window.intlTelInput(itens, {
            customPlaceholder: function (
              selectedCountryPlaceholder,
              selectedCountryData
            ) {
              $obj = selectedCountryPlaceholder;
              $obj = $obj.replace(/1|2|3|4|5|6|7|8|9/gi, "0");
              jQuery($coord).mask($obj);
              return selectedCountryPlaceholder;
            },
            utilsScript: "./src/js/tellinput/utils.js",
            initialCountry: "br",
          });
        }
      });
    }
  };
};

let cmd = new Mask();

cmd.flag(); //Exemplo de campo só com bandeiras(sem a mascara)
cmd.cel(); //Exemplo de campo com bandeiras e filtro de mascara
cmd.mask(); //Exemplo de campo com mascara de data
cmd.mask("00000-000", ".js-input-cep"); //Exemplo de campo com mascara de CEP
cmd.mask("000.000.000-00", ".js-input-cpf"); //Exemplo de campo com mascara de CPF
cmd.mask("00.000.000/0001-00", ".js-input-cnpj"); //Exemplo de campo com mascara de CNPJ
cmd.mask("00.000.000-0", ".js-input-rg"); //Exemplo de campo com mascara de RG

function scrollToContent() {
  document.querySelector("#content").scrollIntoView({
    behavior: "smooth",
  });
}

document.addEventListener('DOMContentLoaded', () => {
  for(let link of document.querySelectorAll('.diferenciais-link')) {
    link.addEventListener('click', (e) => {
      let boxSaiba = link.closest('.business-card').nextElementSibling;
      if(link.dataset.state == 'true') {
        let margin;
        if(window.innerHeight < 1000) {
          margin = -31;
        } else {
          margin = -20;
        }
        boxSaiba.style = 'margin-top:' + margin + 'vh';
        link.dataset.state = 'false';
      } else {
        boxSaiba.style = 'margin-top: 0px'; 
        link.dataset.state = 'true';
      }
    })
  }
})

function scrollToForm(building) {
  document.querySelector("#contact").scrollIntoView({
    behavior: "smooth",
  });

  $('.select-empreendimento').val(building);
  document.getElementsByClassName("select-empreendimento").value = building;

} 

// /* NEWS */

// export{
//   Mask
// }
