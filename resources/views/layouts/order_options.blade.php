<strong>Greiða núna og fá sent eða sækja?</strong>

<form action="/order" method="GET">

    {{ csrf_field() }}

    <label for="pick_up">
        <input type="radio" name="option" id="option1" autocomplete="off"
               value="pick_up">

        Sækja


    </label>


    <label for="pay_now">
        <input type="radio" name="option" id="option2" autocomplete="off" value="pay">

        Fá sent heim

    </label>

    <button type="submit" class="btn btn-success">Klára pöntun</button>

</form>
