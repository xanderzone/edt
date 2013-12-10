<form id="form" method="post" action="visual.php" > 
    <fieldset>
      <legend>Choix emploi du temps</legend>
      <p>
        Jour :
        <select name="jour">
            <option value="semaine" selected="selected">Semaine entière</option>
            <option value="lundi">Lundi</option>
            <option value="mardi">Mardi</option>
            <option value="mercredi">Mercredi</option>
            <option value="jeudi">Jeudi</option>
            <option value="lundi">Vendredi</option>
        </select>
      </p>
      <p>
        Horaire début :
        <select name="horairedebut">
            <option value="8">08h</option>
            <option value="9">09h</option>
            <option value="10">10h</option>
            <option value="11">11h</option>
            <option value="12">12h</option>
            <option value="13">13h</option>
            <option value="14">14h</option>
            <option value="15">15h</option>
            <option value="16">16h</option>
            <option value="17">17h</option>
            <option value="18">18h</option>
        </select>
      </p>
      <p>
        Horaire fin :
        <select name="horairefin">
            <option value="8">08h</option>
            <option value="9">09h</option>
            <option value="10">10h</option>
            <option value="11">11h</option>
            <option value="12">12h</option>
            <option value="13">13h</option>
            <option value="14">14h</option>
            <option value="15">15h</option>
            <option value="16">16h</option>
            <option value="17">17h</option>
            <option value="18">18h</option>
        </select>
      </p>
      <p>
        Groupe :
        <select name="groupe">
            <option value="0">Tous</option>
            <option value="1">G1</option>
            <option value="2">G2</option>
            <option value="3">G3</option>
            <option value="4">G4</option>
            <option value="5">G5</option>
        </select>
      </p>
      <p>
        <input type="submit" value="Envoyer" />
      </p>
    </fieldset>
  </form>

