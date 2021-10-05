
<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_lastname" required >
    <div>
      <label  for="prenom">Prénom :</label>
      <input  type="text"  id="prenom"  name="user_firstname" required >
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required >
    </div>
    <div>
      <label  for="phone">Téléphone :</label>
        <input  type="phone"  id="phone"  name="user_phone" required >
    </div>
    <div>
      <label  for="sujet">Vous nous contactez pour :</label>
        <select id="subject" name="user_subject" required >
            <option value="">--Choisissez--</option>
            <option value="l'épisode covid">Supprimer l'épisode Covid de la mémoire de la population mondiale</option>
            <option value="votre futur job">Vous trouver le job de vos rêves</option>
            <option value="la quête">Juste pour l'exercice</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  type="textarea" id="message"  name="user_message" required ></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
