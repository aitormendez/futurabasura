import 'select2';

$(document).ready(() => {
  let
    w = window.innerWidth,
    selectWidth = ''
    ;
  console.log(w);
  if (w < 791) {
    selectWidth = '80vw';
  } else {
    selectWidth = '35vw';
  }

  $('.dropdown_artist, .orderby').select2({
    minimumResultsForSearch: -1,
    width: selectWidth,
    templateResult: formatState,
    // dropdownParent: $('#desplegable'),
  });
});


function formatState (state) {
  if (!state.id) {
    return state.text;
  }
  var baseUrl = "/user/pages/images/flags";
  var $state = $(
    '<span class="">' + state.text + '</span>'
  );
  return $state;
};
