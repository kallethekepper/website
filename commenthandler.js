function loadComment(recipeName){
  $('.insertCommentHere').load(BASE_URL + 'index.php/recipe/comments/'+ recipeName, null,function(){
    $('.deleteForm').submit(function (e) {
      e.preventDefault();
      var recipe = $(this).find('input[name="whichRecipe"]').val();
      var time = $(this).find('input[name="time"]').val();
      var message = $(this).find('input[name="text"]').val();
      deleteComment(recipe, time, message);
      return false;
    });
    $('.addComment').submit(function(e){
      var recipe = $(this).find('input[name="recipe"]').val();
      var message = $(this).find('input[name="comment"]').val();
      postComment(recipe,message);
      return false;
    })

  });

}

function deleteComment(recipe,date,message){
var formData = {whichRecipe: recipe,  time:date, text:message};
  $.post( BASE_URL + 'index.php/recipe/deleteComment', formData).always(function(){
    loadComment(recipe);
  } );


  console.log(formData);

}

function postComment(recipe, message){
  var formData = {recipe: recipe, comment:message};
    $.post( BASE_URL + 'index.php/recipe/addComment', formData).always(function(){
      loadComment(recipe);
    } );
}
