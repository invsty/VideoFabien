<main class='index'>
    <form action="user_pref.php" method="POST" name="pref">
        <select name="genres">
            <optgroup label="genres :">
                <option value=""></option>
                <?php foreach ($listeGenres as $result) { ?>
                    <option> <?= $result ?> </option>
                <?php  }  ?>
            </optgroup>
        </select>
        <select name="year">
            <optgroup label="year :">
                <option value=""></option>
                <?php foreach ($listeYear as $result) { ?>
                    <option> <?= $result ?> </option>
                <?php  }  ?>
            </optgroup>
        </select>
    <button type="submit" name="submit">Recherche</button>    
    </form>
    <?php foreach ($userSelection as $result) { ?>
        <div> <?= $result ?> </div>
    <?php  }  ?>
</main>