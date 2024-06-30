<!DOCTYPE html>
<html>
<head>
    <title>Questionnaire</title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.O">
    <link rel="stylesheet" type="text/css" href="Echelle_style.css">
</head>
<body>
    <form id="questionnaireForm" method="POST" action="formulaire-valid.php">
        <fieldset>
            <legend>Questionnaire</legend>
            <input type="hidden" name="age" value="<?php echo $_POST['age']; ?>">
            <input type="hidden" name="sexe" value="<?php echo $_POST['sexe']; ?>">
            <input type="hidden" name="Main_dominant" value="<?php echo $_POST['Main_dominant']; ?>">
             <!-- Hidden fields to store final values -->
             <input type="hidden" id="hidden_fiabilite" name="fiabilite" value="0">
            <input type="hidden" id="hidden_competence" name="competence" value="0">
            <input type="hidden" id="hidden_connaissance" name="connaissance" value="0">
            <input type="hidden" id="hidden_interactif" name="interactif" value="0">
            <input type="hidden" id="hidden_reactivite" name="reactivite" value="0">
            <input type="hidden" id="hidden_capacite" name="capacite" value="0">
            <input type="hidden" id="hidden_organique" name="organique" value="0">
            <input type="hidden" id="hidden_sociabilite" name="sociabilite" value="0">
            <input type="hidden" id="hidden_emotion" name="emotion" value="0">
            <input type="hidden" id="hidden_compassion" name="compassion" value="0">
            <input type="hidden" id="hidden_bonheur" name="bonheur" value="0">
            <input type="hidden" id="hidden_ressenti" name="ressenti" value="0">
            <input type="hidden" id="hidden_maladresse" name="maladresse" value="0">
            <input type="hidden" id="hidden_peur" name="peur" value="0">
            <input type="hidden" id="hidden_etrangete" name="etrangete" value="0">
            <input type="hidden" id="hidden_horreur" name="horreur" value="0">
            <input type="hidden" id="hidden_danger" name="danger" value="0">
            <input type="hidden" id="hidden_agressivite" name="agressivite" value="0">

            <div class="section">
                <p class="header-text">L'échelle RoSAS, ou Robotic Social Attributes Scale, est un outil de mesure psychométrique développé pour évaluer les perceptions sociales des robots à travers trois dimensions principales : chaleur, compétence et inconfort. Cette échelle a été conçue pour compléter les lacunes de l'échelle Godspeed, qui se concentre sur des perceptions robotiques plus générales.</p>
                <p  class="header-text">Nous évaluons les critères qui mesurent l'engagement entre un humain et un robot avec l'echelle RoSAS lors de jeu de pierre-feuille-ciseaux. Veuillez cocher les critères que vous pensez observer lors de l'interaction avec Pepper.</p>
                <h3>Compétence</h3>
                <div class="section">
                <p class="header-text">L'échelle RoSAS, ou Robotic Social Attributes Scale, est un outil de mesure psychométrique développé pour évaluer les perceptions sociales des robots à travers trois dimensions principales : chaleur, compétence et inconfort. Cette échelle a été conçue pour compléter les lacunes de l'échelle Godspeed, qui se concentre sur des perceptions robotiques plus générales.</p>
                <p class="header-text">Nous évaluons les critères qui mesurent l'engagement entre un humain et un robot avec l'echelle RoSAS lors de jeu de pierre-feuille-ciseaux. Veuillez cocher les critères que vous pensez observer lors de l'interaction avec Pepper.</p>
                <h3>Compétence</h3>
                <div class="c100">
                    <input type="checkbox" id="reliable" value="fiable" onclick="toggleRange('rangeReliable', 'labelsReliable', 'hidden_fiabilite')">
                    <label for="reliable">Fiable</label>
                    <input type="range" min="0" max="9" value="5" class="slider" id="rangeReliable" style="display:none;">
                    <div class="slider-labels" id="labelsReliable" style="display:none;">
                        <span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span><span>8</span><span>9</span>
                    </div>
                </div>
                <div class="c100">
                    <input type="checkbox" id="competent" name="attributes" value="competent" onclick="toggleRange('rangeCompetent', 'labelsCompetent')">
                    <label for="competent">Compétent</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeCompetent" name="competence" style="display:none;">
                        <div class="slider-labels" id="labelsCompetent" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                    </div>
                <div class="c100">
                    <input type="checkbox" id="knowledgeable" name="attributes" value="connaissant" onclick="toggleRange('rangeKnowledgeable', 'labelsKnowledgeable')">
                    <label for="knowledgeable">Connaissant</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeKnowledgeable" name="connaissance" style="display:none;">
                        <div class="slider-labels" id="labelsKnowledgeable" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                    </div>
                <div class="c100">
                    <input type="checkbox" id="interactive" name="attributes" value="interactif" onclick="toggleRange('rangeInteractive', 'labelsInteractive')">
                    <label for="interactive">Interactif</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeInteractive" name="interactif" style="display:none;">
                        <div class="slider-labels" id="labelsInteractive" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                    </div>
                <div class="c100">
                    <input type="checkbox" id="responsive" name="attributes" value="reactif" onclick="toggleRange('rangeResponsive', 'labelsResponsive')">
                    <label for="responsive">Réactif</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeResponsive" name="reactivite" style="display:none;">
                        <div class="slider-labels" id="labelsResponsive" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                    </div>
                <div class="c100">
                    <input type="checkbox" id="capable" name="attributes" value="capable" onclick="toggleRange('rangeCapable', 'labelsCapable')">
                    <label for="capable">Capable</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeCapable" name="capacite" style="display:none;">
                        <div class="slider-labels" id="labelsCapable" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                    </div>
                    </div>
            <!-- Warmth Section -->
            <div class="section">
                <h3>Chaleur</h3>
                <div class="c100">
                    <input type="checkbox" id="organic" name="attributes" value="organique" onclick="toggleRange('rangeOrganic','labelOrganic')">
                    <label for="organic">Organique</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeOrganic" name="organique" style="display:none;">
                    <div class="slider-labels" id="labelOrganic" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                </div>
                <div class="c100">
                    <input type="checkbox" id="sociable" name="attributes" value="sociable" onclick="toggleRange('rangeSociable','labelSociable')">
                    <label for="sociable">Sociable</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeSociable" name="sociabilite" style="display:none;">
                    <div class="slider-labels" id="labelSociable" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                </div>
                <div class="c100">
                    <input type="checkbox" id="emotional" name="attributes" value="emotionnel" onclick="toggleRange('rangeEmotional', 'labelEmotional')">
                    <label for="emotional">Émotionnel</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeEmotional" name="emotion" style="display:none;">
                    <div class="slider-labels" id="labelEmotional" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                </div>
                <div class="c100">
                    <input type="checkbox" id="compassionate" name="attributes" value="compassionnel" onclick="toggleRange('rangeCompassionate', 'labelCompassionate')">
                    <label for="compassionate">Compatissant</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeCompassionate" name="compassion" style="display:none;">
                    <div class="slider-labels" id="labelCompassionate" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                </div>
                <div class="c100">
                    <input type="checkbox" id="happy" name="attributes" value="heureux" onclick="toggleRange('rangeHappy', 'labelHappy')">
                    <label for="happy">Heureux</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeHappy" name="bonheur" style="display:none;">
                    <div class="slider-labels" id="labelHappy" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                    
                </div>
                <div class="c100">
                    <input type="checkbox" id="feeling" name="attributes" value="ressenti" onclick="toggleRange('rangeFeeling','labelFeeling')">
                    <label for="feeling">Ressenti</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeFeeling" name="ressenti" style="display:none;">
                    <div class="slider-labels" id="labelFeeling" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                </div>
            </div>

            <!-- Discomfort Section -->
            <div class="section">
                <h3>Inconfort</h3>
                <div class="c100">
                    <input type="checkbox" id="awkward" name="attributes" value="maladroit" onclick="toggleRange('rangeAwkward','labelAwkward')">
                    <label for="awkward">Maladroit</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeAwkward" name="maladresse" style="display:none;">
                    <div class="slider-labels" id="labelAwkward" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                </div>
                <div class="c100">
                    <input type="checkbox" id="scary" name="attributes" value="effrayant" onclick="toggleRange('rangeScary', 'labelScary')">
                    <label for="scary">Effrayant</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeScary" name="peur" style="display:none;">
                    <div class="slider-labels" id="labelScary" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                </div>
                <div class="c100">
                    <input type="checkbox" id="strange" name="attributes" value="etrange" onclick="toggleRange('rangeStrange', 'labelStrange')">
                    <label for="strange">Étrange</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeStrange" name="etrangete" style="display:none;">
                    <div class="slider-labels" id="labelStrange" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                </div>
                <div class="c100">
                    <input type="checkbox" id="awful" name="attributes" value="horrible" onclick="toggleRange('rangeAwful', 'labelAwful')">
                    <label for="awful">Horrible</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeAwful" name="horreur" style="display:none;">
                    <div class="slider-labels" id="labelAwful" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                </div>
                <div class="c100">
                    <input type="checkbox" id="dangerous" name="attributes" value="dangereux" onclick="toggleRange('rangeDangerous', 'labelDangerous')">
                    <label for="dangerous">Dangereux</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeDangerous" name="danger" style="display:none;">
                    <div class="slider-labels" id="labelDangerous" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                </div>
                <div class="c100">
                    <input type="checkbox" id="aggressive" name="attributes" value="agressif" onclick="toggleRange('rangeAggressive', 'labelAgressive')">
                    <label for="aggressive">Agressif</label>
                    <input type="range" min="1" max="9" value="5" class="slider" id="rangeAggressive" name="agressivite" style="display:none;">
                    <div class="slider-labels" id="labelAgressive" style="display:none;">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                        </div>
                </div>
            </div>
            <div class="c100">
                <p>Pendant l'interaction, avez-vous remarqué des comportements inattendus de la part de Pepper?</p>
                <input type="radio" id="unexpectedYes" name="unexpectedBehavior" value="yes">
                <label for="unexpectedYes">Oui</label><br>
                <input type="radio" id="unexpectedNo" name="unexpectedBehavior" value="no">
                <label for="unexpectedNo">Non</label><br>
            </div>

            <div class="c100">
                <p>Si vous avez répondu "oui" à la question précédente, pouvez-vous préciser ces comportements?</p>
                <input type="text" id="specifyBehavior" name="specifyBehavior" placeholder="Comportements inattendus">
            </div>

            <div class="c100">
                <p>Avez-vous un commentaire supplémentaire sur l'expérimentation?</p>
                <textarea id="additionalComment" name="commentaires_supplementaires"></textarea>
            </div>

            <div class="c100" id="submit">
                <input type="submit" value="Submit" name="envoyer"/>
            </div>
            
        </fieldset>
    </form>
 <script>
  
  document.getElementById('questionnaireForm').addEventListener('submit', check);
  
  function check(event) {
      var unexpectedYes = document.getElementById("unexpectedYes");
      var unexpectedNo = document.getElementById("unexpectedNo");
  
    if(!unexpectedYes.checked && !unexpectedNo.checked){
        alert("Merci de préciser si vous avez observé des comportements inattendus.");
        event.preventDefault(); // Empêche l'envoi du formulaire
        return false;

    }
    else if (unexpectedYes.checked && !document.getElementById('specifyBehavior').value) {
        // Si 'unexpectedYes' est coché mais aucun détail n'est fourni dans 'specifyBehavior'
        alert("Merci de préciser les comportements inattendus observés.");
        event.preventDefault(); // Empêche l'envoi du formulaire
        return false;
    } else {
        // Si toutes les validations sont passées, le formulaire peut être envoyé
        alert("Toutes les conditions sont remplies, le formulaire va être envoyé.");
    }
  }
  
  
  document.getElementById('questionnaireForm').addEventListener('submit', function(event) {
            var sliders = document.querySelectorAll('.slider');
            sliders.forEach(function(slider) {
                var hiddenInputId = 'hidden_' + slider.id.replace('range', '').toLowerCase();
                var hiddenInput = document.getElementById(hiddenInputId);
                var checkbox = document.querySelector('input[type=checkbox][onclick*="' + slider.id + '"]');
                if (checkbox.checked) {
                    hiddenInput.value = slider.value;
                } else {
                    hiddenInput.value = 0;
                }
            });
        });

        function toggleRange(rangeId, labelId, hiddenInputId) {
            var rangeInput = document.getElementById(rangeId);
            var labels = document.getElementById(labelId);
            var hiddenInput = document.getElementById(hiddenInputId);
            if (rangeInput.style.display === "none") {
                rangeInput.style.display = "block";
                labels.style.display = "flex";
                hiddenInput.value = rangeInput.value;
            } else {
                rangeInput.style.display = "none";
                labels.style.display = "none";
                hiddenInput.value = 0;
            }
        }
    </script>
     </body>
   </html>
  