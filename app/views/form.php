<form enctype="multipart/form-data" method="post" id="inputForm">
    <div class="row" id="input">
        <div class="col-md-1 col-lg-1">Ваше имя:</div>
        <div class="col-md-3 col-lg-3"><input type="text" id="authorInput" name="author"/></div>
    </div>
    <div class="row" id="input">
        <div class="col-md-1 col-lg-1">Ваш отзыв:</div>
        <div class="col-md-4 col-lg-4" id="commentInput"><textarea id="commentInputText" name="coment" cols="54"
                                                                   rows="3" maxlength="255"></textarea></div>
    </div>
    <div class="row" id="input">
        <div class="col-md-1 col-lg-1">Загрузить картинку:</div>
        <div class="col-md-4 col-lg-4" id="inputDownload">
            <input type="file" name="image" accept="image/gif,image/jpeg,image/png">
        </div>
    </div>
    <div class="row" id="input">
       <p class="email" >введите Ваш email </p><input name="email" class="email" id="email">
    </div>
    <div class="row" id="input">
        <div class="col-md-4 col-lg-4" id="inputSubmit">
            <input id="inputButton" type="submit" class="btn-info" />
        </div>
    </div>
</form>