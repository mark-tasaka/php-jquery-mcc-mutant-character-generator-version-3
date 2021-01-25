<!DOCTYPE html>
<html>
<head>
<title>Mutant Crawl Classics Mutant Character Generator Version 3</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Mutant Crawl Classics mutant Character Generator. Goblinoid Games.">
	<meta name="keywords" content="Mutant Crawl Classics, Goblinoid Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2021">
    
    <link rel="icon" href="../../../images/favicon/favicon.png" type="image/png" sizes="16x16"> 
		

	<link rel="stylesheet" type="text/css" href="css/mutant.css">
    
    
    <script type="text/javascript" src="./js/modifiers.js"></script>
    <script type="text/javascript" src="./js/hitPoinst.js"></script>
    <script type="text/javascript" src="./js/abilityScoreAddition.js"></script>
    <script type="text/javascript" src="./js/luckySign.js"></script>
    <script type="text/javascript" src="./js/adjustments.js"></script>
    <script type="text/javascript" src="./js/languages.js"></script>
    
    
    
</head>
<body>
    
    <!--PHP-->
    <?php
    
    include 'php/armour.php';
    include 'php/checks.php';
    include 'php/weapons.php';
    include 'php/gear.php';
    include 'php/classDetails.php';
    include 'php/clothing.php';
    include 'php/abilityScoreGen.php';
    include 'php/randomName.php';
    include 'php/xp.php';
    include 'php/artifacts.php';
    include 'php/profession.php';
    include 'php/zeroLevelMutantAppearance.php';
    include 'php/physicalMutations.php';
    include 'php/mentalMutations.php';
    

        if(isset($_POST["theCharacterName"]))
        {
            $characterName = $_POST["theCharacterName"];
    
        }

        
        if(isset($_POST["thePlayerName"]))
        {
            $playerName = $_POST["thePlayerName"];
    
        }
        
        if(isset($_POST["theGender"]))
        {
            $gender = $_POST["theGender"];
        }


        if(isset($_POST['theCheckBoxRandomName']) && $_POST['theCheckBoxRandomName'] == 1) 
        {
            $characterName = getRandomName($gender) . " " . getSurname();
        } 

        if(isset($_POST["theAlignment"]))
        {
            $alignment = $_POST["theAlignment"];
        }
    
        if(isset($_POST["theLevel"]))
        {
            $level = $_POST["theLevel"];
        
        } 

        $xpNextLevel = getXPNextLevel ($level);
        
        if(isset($_POST["theAbilityScore"]))
        {
            $abilityScoreGen = $_POST["theAbilityScore"];
        
        }

        
        if(isset($_POST["theArtifact1V3"]))
        {
            $artifact1 = $_POST["theArtifact1V3"];
        }
    
        /*Bonus to AC value*/
        $acBonusFromArtifact = 0;
            
    
    

        $artifactName1 = getArtifact1($artifact1)[0];
        $artifactCheck1 = getArtifact1($artifact1)[1];
        $artifactEffect1 = getArtifact1($artifact1)[2];
    
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact1 = artifactAcBonus ($artifactName1);
    
    
    
        if(isset($_POST["theArtifact2V3"]))
        {
            $artifact2 = $_POST["theArtifact2V3"];
        }

        $artifactName2 = getArtifact1($artifact2)[0];
        $artifactCheck2 = getArtifact1($artifact2)[1];
        $artifactEffect2 = getArtifact1($artifact2)[2];
    
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact2 = artifactAcBonus ($artifactName2);
    
    
    
        if(isset($_POST["theArtifact3V3"]))
        {
            $artifact3 = $_POST["theArtifact3V3"];
        }

        $artifactName3 = getArtifact1($artifact3)[0];
        $artifactCheck3 = getArtifact1($artifact3)[1];
        $artifactEffect3 = getArtifact1($artifact3)[2];
    
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact3 = artifactAcBonus ($artifactName3);
    
        $totalArtifactAC = $acBonusFromArtifact1 + $acBonusFromArtifact2 + $acBonusFromArtifact3;
    
    
        
        if(isset($_POST["theArmour"]))
        {
            $armour = $_POST["theArmour"];
        }

        $armourArtifactNumber = getArmourArtifactNumber($armour);

            $artifactName4 = getArtifact1($armourArtifactNumber)[0];
            $artifactCheck4 = getArtifact1($armourArtifactNumber)[1];
            $artifactEffect4 = getArtifact1($armourArtifactNumber)[2];


        $strengthBonusFromArtifact = artifactstrengthbonus ($artifactName4);

        
        $abilityScoreArray = array();
        

        for($i = 0; $i < 6; ++$i)
        {
            $abilityScore = rollAbilityScores ($abilityScoreGen);

            array_push($abilityScoreArray, $abilityScore);

        }


        $physicalMutationArray = array();

        for($m = 0; $m < 26; ++$m)
        {
            array_push($physicalMutationArray, $m);
        }

        shuffle($physicalMutationArray);

        if(isset($_POST["thePhysicalMutuation"]))
        {
            $physicalMutationString = $_POST["thePhysicalMutuation"];
            //casting not necessary with php (it's good practice)
            $physicalMutationTotal = (int)$physicalMutationString;
        }

        if(isset($_POST['theRandomMutuations']) && $_POST['theRandomMutuations'] == 1) 
        {
            $dieRollPhysicalMutations = rand(1, 3);
            $physicalMutationTotal = $dieRollPhysicalMutations;
        } 

        $characterPhysicalMutations = array();

        //Mutation/Defect Adjustments
        //0-4
        $mutantStrAdj = 0;
        $mutantAgiAdj = 0;
        $mutantStaAdj = 0;
        $mutantPerAdj = 0;
        $mutantIntAdj = 0;
        //5 - 7
        $mutantACAdj = 0;
        $mutantInitAdj = 0;
        $mutantActionDieAdj = 0;
        //8-9
        $mutantMeleeAdj = 0;
        $mutantMissileAdj = 0;
        //10-12
        $mutantRefAdj = 0;
        $mutantFortAdj = 0;
        $mutantWillAdj = 0;
        //13
        $mutantSpeedAdj = 0;


        for($k = 0; $k < $physicalMutationTotal; ++$k)
        {
            $mutationNumber = $physicalMutationArray[$k];

            $mutationName = getPhysicalMutationName($mutationNumber);
            $mutationType = getPhyicalMutationType($mutationNumber);
            $mutationManifest = getPhysicalMutationManifestation($mutationNumber);

            if($mutationNumber <= 10)
            {
                $mutationEffect = "A mutation check roll each time the active mutation is used.";
            }
            else
            {
                $dieRoll = rand(0, 5);

                $mutationEffect = getPhyicalMutationEffect($mutationNumber, $dieRoll);

            }

            $mutation = 'Mutation: ' . $mutationName . ' (' . $mutationType . ')<br/><br/>Manifestation: ' . $mutationManifest  . '<br/><br/>Effect: ' . $mutationEffect;

            array_push($characterPhysicalMutations, $mutation);
        }



        if(isset($_POST['theOptimizeAbilityScore']) && $_POST['theOptimizeAbilityScore'] == 1) 
        {
            rsort($abilityScoreArray);

            $strengthBase = $abilityScoreArray[0];
            $agility = $abilityScoreArray[2];
            $stamina = $abilityScoreArray[1];
            $personality = $abilityScoreArray[4];
            $intelligence = $abilityScoreArray[5];
            $luck = $abilityScoreArray[3];

            $optimizeAbilityScoreMessage = "Ability Scores optimized in the order of Str, Sta, Agi, Luck, Per, Int.";
        }
        else if($_POST['theOptimizeAbilityScore'] == 2)
        {
            rsort($abilityScoreArray);

            $strengthBase = $abilityScoreArray[3];
            $agility = $abilityScoreArray[2];
            $stamina = $abilityScoreArray[1];
            $personality = $abilityScoreArray[5];
            $intelligence = $abilityScoreArray[4];
            $luck = $abilityScoreArray[0];

            $optimizeAbilityScoreMessage = "Ability Scores optimized in the order of Luck, Sta, Agi, Str, Int, Per.";
        }
        else if($_POST['theOptimizeAbilityScore'] == 3)
        {
            rsort($abilityScoreArray);

            $strengthBase = $abilityScoreArray[4];
            $agility = $abilityScoreArray[0];
            $stamina = $abilityScoreArray[1];
            $personality = $abilityScoreArray[3];
            $intelligence = $abilityScoreArray[5];
            $luck = $abilityScoreArray[2];

            $optimizeAbilityScoreMessage = "Ability Scores optimized in the order of Agi, Sta, Luck, Per, Str, Int.";
        }
        else if($_POST['theOptimizeAbilityScore'] == 4)
        {
            rsort($abilityScoreArray);

            $strengthBase = $abilityScoreArray[5];
            $agility = $abilityScoreArray[4];
            $stamina = $abilityScoreArray[3];
            $personality = $abilityScoreArray[2];
            $intelligence = $abilityScoreArray[1];
            $luck = $abilityScoreArray[0];

            $optimizeAbilityScoreMessage = "Ability Scores optimized in the order of Luck, Int, Per, Sta, Agi, Str.";
        }
        else
        {
            $strengthBase = $abilityScoreArray[0];
            $agility = $abilityScoreArray[1];
            $stamina = $abilityScoreArray[2];
            $personality = $abilityScoreArray[3];
            $intelligence = $abilityScoreArray[4];
            $luck = $abilityScoreArray[5];
            
            $optimizeAbilityScoreMessage = "";
        }



        $strength = $strengthBonusFromArtifact + $strengthBase;

        $strengthMod = getStrengthModifier($strength);
        $agilityMod = getMutantAbilityScoreModifier($agility);
        $staminaMod = getMutantAbilityScoreModifier($stamina);
        $personalityMod = getMutantAbilityScoreModifier($personality);
        $intelligenceMod = getMutantAbilityScoreModifier($intelligence);
        $luckMod = getMutantAbilityScoreModifier($luck);
    
        $generationMessage = generationMesssage ($abilityScoreGen);
    
        if(isset($_POST["theArmour"]))
        {
            $armour = $_POST["theArmour"];
        }

        $armourName = getArmour($armour)[0];
        
        $armourACBonus = getArmour($armour)[1];
        $armourFumbleDie = getArmour($armour)[2];

        if(isset($_POST['theCheckBoxShield']) && $_POST['theCheckBoxShield'] == 1) 
        {
            $shieldName = getArmour(7)[0];
            $shieldACBonus = getArmour(7)[1];
            $shieldFumbleDie = getArmour(7)[2];
        }
        else
        {
            $shieldName = getArmour(8)[0];
            $shieldACBonus = getArmour(8)[1];
            $shieldFumbleDie = getArmour(8)[2];
        } 

       $totalAcDefense = $armourACBonus + $shieldACBonus + $totalArtifactAC;

       $speed = 30;

       $reflexBase = savingThrowReflex($level);
       $fortBase = savingThrowFort($level);
       $willBase = savingThrowWill($level);

       $criticalDie = criticalDie($level);


       $actionDice = actionDice($level);


       $title = title($level);

         
        $weaponArray = array();
        $weaponNames = array();
        $weaponDamage = array();
    
    

    //For Random Select gear
    if(isset($_POST['thecheckBoxRandomWeaponsV3']) && $_POST['thecheckBoxRandomWeaponsV3'] == 1) 
    {
        $weaponArray = getRandomWeapons();

    }
    else
    {
        if(isset($_POST["theWeapons"]))
        {
            foreach($_POST["theWeapons"] as $weapon)
            {
                array_push($weaponArray, $weapon);
            }
        }
    }

    
    foreach($weaponArray as $select)
    {
        array_push($weaponNames, getWeapon($select)[0]);
    }
        
    foreach($weaponArray as $select)
    {
        array_push($weaponDamage, getWeapon($select)[1]);
    }
        
        $gearArray = array();
        $gearNames = array();



    //For Random Select gear
    if(isset($_POST['theCheckBoxRandomGear']) && $_POST['theCheckBoxRandomGear'] == 1) 
    {
        $gearArray = getRandomGear();

        $weaponCount = count($weaponArray);
        $hasSling = false;
        $hasSlingStaff = false;

        for($i = 0; $i < $weaponCount; ++$i)
        {
            if($weaponArray[$i] == "18" && $hasSlingStaff == false)
            {
                array_push($gearArray, 25);
                
                $hasSling = true;
            }

            if($weaponArray[$i] == "19" && $hasSling == false)
            {
                array_push($gearArray, 25);

                $hasSlingStaff = true;
            }

            if($weaponArray[$i] == "12")
            {
                array_push($gearArray, 24);
            }


        }

    }
    else
    {
        //For Manually select gear
        if(isset($_POST["theGear"]))
            {
                foreach($_POST["theGear"] as $gear)
                {
                    array_push($gearArray, $gear);
                }
            }

    }

    
        foreach($gearArray as $select)
        {
            array_push($gearNames, getGear($select)[0]);
        }


    $artifactCheckBonus = getArtifactCheckBonus($level);

    $artifactCheckBonusPlusInt = $artifactCheckBonus + $intelligenceMod;

    $mutantHorrorBonus = getMutantHorrorBonus($level);

    $mutantHorrorPart1 = getMutantHorrorPart1($level);
    $mutantHorrorPart2 = getMutantHorrorPart2($level);


    $profession = getProfession();

    $zeroLvMutantAppearance = getMutantAppearance();

    
    
    ?>

    
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
       
           
		<span id="strength"></span>
		<span id="agility"></span> 
		<span id="stamina"></span> 
		<span id="intelligence"></span>
		<span id="personality"></span>
       <span id="luck"></span>
       
       
           
		<span id="strengthMod"></span>
		<span id="agilityMod"></span> 
		<span id="staminaMod"></span> 
		<span id="intelligenceMod"></span>
		<span id="personalityMod"></span>
       <span id="luckMod"></span>

       <span id="reflex"></span>
       <span id="fort"></span>
       <span id="will"></span>
		  
       
       <span id="gender">
           <?php
           echo $gender;
           ?>
       </span>
       
       

       
       <span id="artifactCheck">
           <?php
                if($artifactCheckBonusPlusInt == 0)
                {
                    echo '+' . $artifactCheckBonusPlusInt;
                }
                else if($artifactCheckBonusPlusInt < 0)
                {
                    echo $artifactCheckBonusPlusInt;
                }
                else
                {
                    echo '+' . $artifactCheckBonusPlusInt;
                }
           ?>
       </span>

       
       <span id="mutantHorrorBonus">
           <?php
                echo $mutantHorrorBonus;
           ?>
        </span>


        <span id="maxTech"></span>

       
       <span id="class">Mutant</span>
       
       <span id="armourClass"></span>

       <span id="baseAC"></span>
       
       <span id="hitPoints"></span>

       <span id="languages"></span>
       <span id="level">
           <?php
                echo $level;
           ?>
        </span>
       
       <span id="xpNextLevel">
           <?php
                echo $xpNextLevel;
           ?>
        </span>

       
       <span id="characterName">
           <?php
                echo $characterName;
           ?>
        </span>

        
       <span id="playerName">
           <?php
                echo $playerName;
           ?>
        </span>
       
       
              
         <span id="alignment">
           <?php
                echo $alignment;
           ?>
        </span>
        
        <span id="speed"></span>


       	                 
        <span id="artifactName1">
           <?php
                echo $artifactName1;
           ?>
        </span>
              
       <span id="artifactCheck1">
           <?php
                echo $artifactCheck1;
           ?>
        </span>
              
       <span id="artifactEffect1">
           <?php
                echo $artifactEffect1;
           ?>
        </span>
      
              	                 
       <span id="artifactName2">
           <?php
                echo $artifactName2;
           ?>
        </span>
              
       <span id="artifactCheck2">
           <?php
                echo $artifactCheck2;
           ?>
        </span>
              
       <span id="artifactEffect2">
           <?php
                echo $artifactEffect2;
           ?>
        </span>
      
                     	                 
       <span id="artifactName3">
           <?php
                echo $artifactName3;
           ?>
        </span>
              
       <span id="artifactCheck3">
           <?php
                echo $artifactCheck3;
           ?>
        </span>
              
       <span id="artifactEffect3">
           <?php
                echo $artifactEffect3;
           ?>
        </span>

        <span id="artifactName4">
           <?php
                echo $artifactName4;
           ?>
        </span>
              
       <span id="artifactCheck4">
           <?php
                echo $artifactCheck4;
           ?>
        </span>
              
       <span id="artifactEffect4">
           <?php
                echo $artifactEffect4;
           ?>
        </span>

              
       <span id="armourName">
           <?php
           if($armourName == "")
           {
               echo $shieldName;
           }
           else if($shieldName == "")
           {
                echo $armourName;
           }
           else
           {
            echo $armourName . " & " . $shieldName;
           }
           ?>
        </span>

        <span id="armourACBonus">
            <?php
                echo '+' . $totalAcDefense;
            ?>
        </span>


        <span id="fumbleDie">
            <?php
            if($armourName == "")
            {
                echo $shieldFumbleDie;
            }
            else
            {
                echo $armourFumbleDie;
            }
            ?>
        </span>

        <span id="criticalDieTable">
            <?php
                echo $criticalDie;
            ?>
        </span>
        
        <span id="initiative">
        </span>
        
        <span id="actionDice">
            <?php
                echo $actionDice;
            ?>
        </span>

        
        <span id="title">
            <?php
                echo $title;
            ?>
        </span>



        
		<p id="birthAugur"><span id="luckySign"></span>: <span id="luckyRoll"></span> (<span id="LuckySignBonus"></span>)</p>

        
        <span id="melee"></span>
        <span id="range"></span>
        
        <span id="meleeDamage"></span>
        <span id="rangeDamage"></span>

        <span id="characterPhysicalMutations">
        <?php
           
           foreach($characterPhysicalMutations as $thePMutations)
           {
               echo $thePMutations;
               echo "<br/>----------------------------------------------------------<br/>";
           }
           
           ?>  
        </span>
        
       
       <span id="weaponsList">
           <?php
           
           foreach($weaponNames as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
           }
           
           ?>  
        </span>

       <span id="weaponsList2">
           <?php
           foreach($weaponDamage as $theWeaponDam)
           {
               echo $theWeaponDam;
               echo "<br/>";
           }
           ?>        
        </span>
       

       <span id="gearList">
           <?php

           $gearCount = count($gearNames);
           $counter = 1;
           
           foreach($gearNames as $theGear)
           {
              echo $theGear;

              if($counter == $gearCount-1)
              {
                  echo " and ";
              }
              elseif($counter > $gearCount-1)
              {
                  echo ".";
              }
              else
              {
                  echo ", ";
              }

              ++$counter;
           }
           ?>
       </span>


       <span id="abilityScoreGeneration">
            <?php
           echo $generationMessage . '<br/>' . $optimizeAbilityScoreMessage;
           ?>
       </span>

       <span id="profession">
            <?php
           echo $profession;
           ?>
       </span>

       <span id="zeroLvMutantAppearance">
            <?php
           echo $zeroLvMutantAppearance;
           ?>
       </span>

       
	</section>
	

		
  <script>
      

	  
	/*
	 Character() - mutant Character Constructor
	*/
	function Character() {
        
        let strength = <?php echo $strength ?>;
        let	intelligence = <?php echo $intelligence ?>;
        let	personality = <?php echo $personality ?>;
        let agility = <?php echo $agility ?>;
        let stamina = <?php echo $stamina ?>;
        let	luck = <?php echo $luck ?>;
        let strengthMod = <?php echo $strengthMod ?>;
        let intelligenceMod = <?php echo $intelligenceMod ?>;
        let personalityMod = <?php echo $personalityMod ?>;
        let agilityMod = <?php echo $agilityMod ?>;
        let staminaMod = <?php echo $staminaMod ?>;
        let luckMod = <?php echo $luckMod ?>;
        let level = '<?php echo $level ?>';
        let gender = '<?php echo $gender ?>';
        let armour = '<?php echo $armourName ?>';
	    let birthAugur = getLuckySign();
        let maxTechLevel = getMaxTechLevel(intelligence);
        let bonusLanguages = fnAddLanguages(intelligenceMod, birthAugur, luckMod);
	    let baseAC = getBaseArmourClass(agilityMod) + adjustAC(birthAugur, luckMod);
        let mutantHorrorInitPart2 =  <?php echo $mutantHorrorPart2 ?>;
        let initBase = mutantHorrorInitPart2 + agilityMod + adjustInit(birthAugur, luckMod);
        let mutantInitBonus2 = addModifierSign(initBase);

		let mutantCharacter = {
			"strength": strength,
			"agility": agility,
			"stamina": stamina,
			"intelligence": intelligence,
			"personality": personality,
			"luck": luck,
            "strengthModifer": addModifierSign(strengthMod),
            "intelligenceModifer": addModifierSign(intelligenceMod),
            "personalityModifer": addModifierSign(personalityMod),
            "agilityModifer": addModifierSign(agilityMod),
            "staminaModifer": addModifierSign(staminaMod),
            "luckModifer": addModifierSign(luckMod),
            "acBase": baseAC,
			"luckySign": birthAugur.luckySign,
            "luckyRoll": birthAugur.luckyRoll,
            "move": <?php echo $speed ?> + addLuckToSpeed (birthAugur, luckMod),
            "addLanguages": "Nu-Speak" + bonusLanguages,
            "armourClass": <?php echo $totalAcDefense ?> + baseAC,
            "hp": getHitPoints (level, staminaMod) + hitPointAdjustPerLevel(birthAugur,  luckMod),
			"melee": strengthMod + <?php echo $level ?> + meleeAdjust(birthAugur, luckMod),
			"range": agilityMod +  <?php echo $level ?> + rangeAdjust(birthAugur, luckMod),
			"meleeDamage": strengthMod + adjustMeleeDamage(birthAugur, luckMod),
            "rangeDamage": adjustRangeDamage(birthAugur, luckMod),
            "techLevel": maxTechLevel,
            "reflex": <?php echo $reflexBase ?> + agilityMod + adjustRef(birthAugur, luckMod),
            "fort": <?php echo $fortBase ?> + staminaMod + adjustFort(birthAugur,luckMod),
            "will": <?php echo $willBase ?> + personalityMod + adjustWill(birthAugur, luckMod),
            "initiative": '<?php echo 'd20+' . $mutantHorrorPart1 ?>' + mutantInitBonus2

		};
	    if(mutantCharacter.hitPoints <= 0 ){
			mutantCharacter.hitPoints = 1;
		}
		return mutantCharacter;
	  
	  }
	  


  
       let imgData = "images/mutant.png";
      
        $("#character_sheet").attr("src", imgData);
      

      let data = Character();
      
		 
      $("#strength").html(data.strength);
      
      $("#intelligence").html(data.intelligence);
      
      $("#personality").html(data.personality);
      
      $("#agility").html(data.agility);
      
      $("#stamina").html(data.stamina);
      
      $("#luck").html(data.luck);
      
      
		 
      $("#strengthMod").html(data.strengthModifer);
      
      $("#intelligenceMod").html(data.intelligenceModifer);
      
      $("#personalityMod").html(data.personalityModifer);
      
      $("#agilityMod").html(data.agilityModifer);
      
      $("#staminaMod").html(data.staminaModifer);
      
      $("#luckMod").html(data.luckModifer);
      
      
            
      $("#hitPoints").html(data.hp);
      
      $("#armourClass").html(data.armourClass);
      
      $("#reflex").html(addModifierSign(data.reflex));
      $("#fort").html(addModifierSign(data.fort));
      $("#will").html(addModifierSign(data.will));
      
      $("#initiative").html(data.initiative);
      
      $("#speed").html(data.move + "'");
      
      $("#luckySign").html(data.luckySign);
      $("#luckyRoll").html(data.luckyRoll);    
      $("#LuckySignBonus").html(data.luckModifer);

      $("#languages").html(data.addLanguages);
      $("#melee").html(addModifierSign(data.melee));
      $("#range").html(addModifierSign(data.range));
      $("#meleeDamage").html(addModifierSign(data.meleeDamage));
      $("#rangeDamage").html(addModifierSign(data.rangeDamage));

      
      $("#baseAC").html("(" + data.acBase + ")");
      $("#maxTech").html(data.techLevel);
      

	 
  </script>
		
	
    
</body>
</html>