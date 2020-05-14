<!DOCTYPE html>
<html>
<head>
<title>Launch Page: Dungeon Crawl Classics Thief Generator Version 2</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2020">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/githubMCC.css"/> 
	<link rel="stylesheet" href="css/bf_additions.css"/> 
	<link rel="stylesheet" href="css/bf_additions2.css"/> 
	<link rel="stylesheet" href="css/general.css"/> 
	<link rel="stylesheet" href="css/basic_style.css"/> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="Dungeon Crawl Classics Thief Generator Version 2" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>Designed with PHP and jQuery, the Dungeon Crawl Classics Thief Character Generator randomly generates a character. The generator allows for the user to input different parameters to determine the character's level, equipment, weapons, alignment, etc.</p>    

        <br/>
        <br/>
            
  

            
		<form action="" id ="ThiefForm"  target="_blank" method="post">
    
    <div class="content9">


                
  
            <span class="formIputDescription">Character's Name:</span>
            <span id="characterName"> <input type="text" name="theCharacterName" value="" class="nameBox"></span>
           
           <br/>
           <br/>

                  
           <div class="formIputDescription">
           <span class="footnote3"><input type="checkbox" id="checkBoxRandomName" value="1" name="theCheckBoxRandomName">Use Randomly Generated Name</span>
           </div>

           <br/>
                  
                           
        <span class="formIputDescription">Gender:</span>	
			  <select id="gender" name="theGender" class="alignmentBox">	
				<option value="Male" selected>Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
				<option value="Blank">Blank</option>
        </select>
        
        <br/>
        <br/>
            
                            
            <span class="formIputDescription">Character Level:</span>	
			  <select id="level" name="theLevel" class="alignmentBox">	
				<option value="1" selected>Level 1</option>
				<option value="2">Level 2</option>
				<option value="3">Level 3</option>
				<option value="4">Level 4</option>
				<option value="5">Level 5</option>
				<option value="6">Level 6</option>
				<option value="7">Level 7</option>
				<option value="8">Level 8</option>
				<option value="9">Level 9</option>
				<option value="10">Level 10</option>
			  </select>
            
            <br/>
            <br/>
                
                    

                
            
            <span class="formIputDescription">Alignment:</span>	
			  <select id="alignment" name="theAlignment" class="alignmentBox">	
				<option value="Chaotic" selected>Chaotic</option>		
				<option value="Neutral">Neutral</option>
        <option value="Lawful" >Lawful</option>
			  </select>
            
            <br/>
            <br/>
                            
                <span class="formIputDescription">Ability Scores:</span>	
			  <select id="abilityScores" name="theAbilityScore" class="alignmentBox">	
				<option value="1" selected>3d6 (Old School)</option>
				<option value="2">4d6, drop the lowest</option>
				<option value="3">2d6+6</option>
				<option value="4">2d8+2</option>
				<option value="5">2d7+4</option>
			  </select>
            
                
            <br/>
            <br/>
                
                            

                            
            <span class="formIputDescription">Armour:</span>	
			  <select id="armour" name="theArmour" class="alignmentBox">			
                <option value="0" selected>No Armour</option>
				<option value="1">Padded armour</option>
				<option value="2">Leather armour</option>
				<option value="3">Studded leather armour</option>
				<option value="4">Hide armour</option>
				<option value="5">Scale mail armour</option>
				<option value="6">Chainmail armour</option>
				<option value="7">Banded mail armour</option>
				<option value="8">Half-plate armour</option>
				<option value="9">Full plate armour</option>
			  </select>

        <br/>
        <br/>
        
                  
        <div class="formIputDescription">
           <span class="footnote3"><input type="checkbox" id="checkBoxShield" value="1" name="theCheckBoxShield">Add Shield</span>
           </div>

           <br/>

                

                <span class="weaponBoxHeader">Weapons:</span>
                <br/><br/>
                
            <div id="weaponsGroupings">
                <input type="checkbox" name="theWeapons[]" value="1"> Blackjack<br/>  
                <input type="checkbox" name="theWeapons[]" value="2"> Blowgun<br/>  
                <input type="checkbox" name="theWeapons[]" value="4"> Crossbow<br/> 
                <input type="checkbox" name="theWeapons[]" value="5"> Dagger<br/>   
                <input type="checkbox" name="theWeapons[]" value="6"> Dart<br/> 
                <input type="checkbox" name="theWeapons[]" value="8"> Garrote<br/> 
                <input type="checkbox" name="theWeapons[]" value="13"> Longsword<br/> 
                <input type="checkbox" name="theWeapons[]" value="17"> Short sword<br/> 
                <input type="checkbox" name="theWeapons[]" value="18"> Sling<br/> 
                <input type="checkbox" name="theWeapons[]" value="20"> Staff<br/> 
                
                
                </div>
                <br/>
                <br/>
                
                <span class="weaponBoxHeader">Equipment/Ammo:</span>
                <br/><br/>
                
            <div id="gearGroupings">
                <span class="weaponSubHead">Equipment:</span><br/><br/>
                <input type="checkbox" name="theGear[]" value="0"> Backpack<br/>
                <input type="checkbox" name="theGear[]" value="1"> Candle<br/>  
                <input type="checkbox" name="theGear[]" value="2"> Chain, 10'<br/>  
                <input type="checkbox" name="theGear[]" value="3"> Chalk, 12 pieces<br/>  
                <input type="checkbox" name="theGear[]" value="4"> Chest, empty<br/>  
                <input type="checkbox" name="theGear[]" value="5"> Crowbar<br/>   
                <input type="checkbox" name="theGear[]" value="6"> Flask, empty<br/>  
                <input type="checkbox" name="theGear[]" value="7"> Flint & steel<br/>  
                <input type="checkbox" name="theGear[]" value="8"> Grappling hook<br/> 
                <input type="checkbox" name="theGear[]" value="9"> Hammer, small<br/> 
                <input type="checkbox" name="theGear[]" value="10"> Holy symbol<br/> 
                <input type="checkbox" name="theGear[]" value="11"> Holy water, 1 vial<br/> 
                <input type="checkbox" name="theGear[]" value="12"> Iron spikes, dozen<br/> 
                <input type="checkbox" name="theGear[]" value="13"> Lantern<br/> 
                <input type="checkbox" name="theGear[]" value="14"> Mirror, hand-sized<br/> 
                <input type="checkbox" name="theGear[]" value="15"> Oil, 1 flask<br/>
                <input type="checkbox" name="theGear[]" value="16"> Pole, 10-foot<br/> 
                <input type="checkbox" name="theGear[]" value="17"> Rations, 5 days<br/> 
                <input type="checkbox" name="theGear[]" value="18"> Rope, 50'<br/> 
                <input type="checkbox" name="theGear[]" value="19"> Sack, large<br/> 
                <input type="checkbox" name="theGear[]" value="20"> Sack, small<br/> 
                <input type="checkbox" name="theGear[]" value="21"> Thieves' tools<br/> 
                <input type="checkbox" name="theGear[]" value="22"> Torches, 12<br/> 
                <input type="checkbox" name="theGear[]" value="23"> Waterskin<br/> 
                <br/>
                <span class="weaponSubHead">Ammo:</span><br/><br/>
                <input type="checkbox" name="theGear[]" value="26"> Quarrels, 20<br/>   
                <input type="checkbox" name="theGear[]" value="27"> Sling stones, 30<br/>  
                </div>
                
                <br/>
                <br/>

            
		<div class="content8">
            
			  
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
                    <input type="submit" value="" id="generate_characters2"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generator2"/>
		
				</span>
                
		
            </div>
            </div>
            
				
            </div>
            
            </form>
            
            
            
                
                
                	
                <script>
        
                    $("#generate_characters2").click(function(){
         
    
                        $("#ThiefForm").attr('action', "character/dccThief.php");
    
                    });
                    
                </script>
        
                
                
      
                
 
                
    </section>


</body>
</html>