<?php

function getMentalMutationName($input)
{
    //Active Mutations 0-22
    //Passive Mutations 23-25
    $mutationName = array("Cryokinesis","Death Field Generation","Devolution","Domination","Empathy","Force Field Generation","Illusion Generation","Life Force Reflection","Magnetic Control","Mind Control","Mental Blast","Mental Shield","Mental Reflection","Molecular Disruption","Molecular Integration","Pyrokinesis","Telekinesis","Telepathy","Teleportation","Temporary Invulnerability","Thought Spike","Time Sense","Time Stop","Absorption","Dual Brain","Heightened Intelligence");

    return $mutationName[$input];
}

function getMentalMutationType($input)
{
    if($input <= 22)
    {
        $type = "Active";
    }
    else
    {
        $type = "Passive";
    }

    return $type;
}



function mentalMutationManifestation($input)
{
    $a00 = array"A dense ice fog rolls off the mutant’s body.",
    "The mutant’s skin is icy blue and eyes are a cold, glazed white.",
    "The mutant’s body becomes temporarily encased in layer of snow.",
    "The mutant’s body temporarily becomes glassy, semi-transparent, and extremely cold to the touch.");

    $a01 = array("The mutant’s body is surrounded in a dark-violet nimbus.",
    "The mutant’s body exudes the ghastly smell of rotting corpses.",
    "Skin on the mutant’s head becomes temporarily transparent, exposing the skull.",
    "The mutant’s hands and arms or equivalent limbs have no flesh, and are skeletal.");

    $a02 = array("The mutant’s forehead glows a bright green.",
    "A bright green ray is projected from the mutant’s eyes.",
    "A bright green ray is projected from the mutant’s eyes.",
    "The mutant’s hands are surrounded by a glowing green aureole resembling ever-changing DNA strands.");

    $a03 = array("The mutant’s eyes glow with an intense yellow light.",
    "The mutant’s facial features become temporarily beatific.",
    "The mutant’s merest hand gesture produces sparkles in the air.",
    "A spinning hypnotic pinwheel of light appears above the mutant’s head.");

    $a04 = array("The mutant’s eyes glow warmly behind closed lids.",
    "The mutant’s head is encircled and suffused with a warm glow.",
    "The mutant’s face suddenly transforms into a semblance of the target creature.",
    "For a flickering instant, the mutant and target creature appear to exchange bodies and places.");

    $a05 = array("The mutant generates a force field that is completely invisible.",
    "The mutant generates a force screen that causes the air to ripple in a wavy pattern and hums noticeably.",
    "The mutant is surrounded by wall of translucent blue light.",
    "The mutant’s force field appears as a yellow-orange hexagonal grid that waves and undulates.");

    $a06 = array("The mutant’s eyes turn all-white.",
    "The mutant must touch the forefingers of one hand to his forehead.",
    "The mutant’s forehead appears to ripple in concentric circles.",
    "The mutant appears to be is surrounded by a rotating miasma of polychromatic chaos.");

    $a07 = array("",
                "",
                "",
                "");
                    
    $a08 = array("",
                "",
                "",
                "");

    $a09 = array("",
                "",
                "",
                "");

    $a10 = array("",
                "",
                "",
                "");

    $a11 = array("The mutant’s back and abdomen are encased in a turtle-like shell.",
                      "The mutant’s body is covered by a chitinous exoskeletal.",
                      "The mutant’s skin is like thick, spiked dinosaur hide.",
                      "The mutant’s body is covered in hexagonal granite-like epidermal cells.");

    $a12 = array("The mutant’s claws are composed of a razor sharp chitinous or bone-like material.",
                      "The mutant’s claws are comprised of organic duralloy.",
                      "The mutant’s Claws are molecular-edge carbon nano-structures.",
                      "The mutant’s claws are projected as edged plasma fields.");

    $a13 = array("The mutant’s metabolism runs at a superior rate and the rail-thin mutant must consume twice as many calories as normal.",
                      "The mutant’s genes carry fragments of mongoose DNA, causing increased reaction speed and giving the mutant a rat-like face.",
                      "The mutant’s nerve conduction velocity is accelerated to that of a radioactive spider.",
                      "The mutant’s brain is able to scan alternate future timelines in a limited fashion, and is thus better able to calculate body speed, position, and actions.");

    $a14 = array("The mutant’s skin appears as dull lead.",
                      "The mutant’s skin is the color of oxidized copper.",
                      "The mutant’s skin resembles chrome plating.",
                      "The mutant’s skin flashes metallic red briefly each time the mutant makes a Fortitude saving throw.");

    $a15 = array("The mutant’s body appears extremely over-muscled.",
                      "The mutant is abnormally short and squat, as though adapted for a higher gravity.",
                      "The mutant’s body glows dimly and converts nearby matter directly into kinetic energy whenever extreme strength is exercised.",
                      "The mutant’s body is composed of superdense ebony-colored elements and weighs 3x normal.");

    $a16 = array("The mutant’s movements, even when resting, appear jittery and shaky.",
                      "The mutant is unable to remain still or at rest, even when sleeping.",
                      "The mutant operates in a slightly different time frame, and does not appear to move at all, but strobes instantly from one position to the next.",
                      "The mutant’s movements cannot be followed by normal vision, as he is visible only as a blurred streak when acting at an accelerated pace.");

    $a17 = array( "The mutant’s eyes reflect red light in the dark.",
                      "The mutant’s entire field of vision can be dimly seen in the dark as twin projected light beams.",
                      "The mutant’s eyes are entirely comprised of reddish pupils.",
                      "The mutant has a third eye placed center in the mutant’s forehead which actively broadcasts infrared light.");

    $a18 = array("The extra body parts are a different skin color (see Table 1-6, result 1-5).",
                      "The extra body parts are scaly or furry.",
                      "The extra body parts are skeletal or chitinous.",
                      "The extra body parts are metallic, and appear artificial.");

    $a19 = array("The new body parts are scaly.",
                      "The new body parts are furred.",
                      "The new body parts are skeletal or chitinous.",
                      "The new body parts are metallic, and appear artificial.");

    $a20 = array("The mutant’s body is supple and rubbery.",
                      "The mutant’s body and appendages are coiled and extensible.",
                      "The mutant’s body is gelatinous in nature with pseudopodic arms and legs.",
                      "The mutant’s body is comprised of an unknown quantum state of matter, able to add and subtract mass instantaneously.");

    $a21 = array("The mutant’s body is a scaled-down version of other members of his genotype.",
                      "The mutant’s body is shorter but just as wide as other members of his genotype.",
                      "The mutant’s body is shorter than other members of his genotype, but his lower legs and feet are extra-large.",
                      "The mutant’s upper body is normally proportioned, but he has no legs with feet attached directly to the torso.");

    $a22 = array("The mutant’s back and abdomen are covered in stiff quills.",
                      "The mutant’s forearms are covered with bony spines.",
                      "The mutant’s head has long sharp metallic quills, helmets and other head gear may not be worn.",
                      "The mutant’s skin contains thousands of sub-dermal pores containing short, chitinous bone spikes.");

    $a23 = array("The mutant’s body is a scaled-up version of other members of his genotype.",
                      "The mutant’s body is taller but much slimmer than other members of his genotype.",
                      "The mutant’s body is taller than other members of his genotype, but his lower legs and feet are extra-wide.",
                      "The mutant’s upper body is normally proportioned, but he his legs are much longer than other members of his genotype or species.");

    $a24 = array("The mutant’s eyes glow ultraviolet.",
                      "The mutant’s entire field of vision acts as a black light lamp, these purple beams are visible under dim lighting conditions.",
                      "The mutant’s eyes are entirely composed of dark purple pupils.",
                      "The mutant has a single cyclopean eye that is all-white with no visible iris or pupil.");

    $a25 = array("The mutant has wings of a type closely related to the mutant’s genotype (furred for mammals, feathered for avians, scaly for reptilians, etc.).",
                      "The mutant has wings of an unrelated type for the mutant’s genotype (insectoid or feathered wings on a mammal, and so on).",
                      "The mutant has wings comprised of a chrome-like organic metal.",
                      "The mutant has wings composed of electric-blue projected force fields.");


    $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25);
    
    return $array1[$input];
    
}

function getMentalMutationManifestation($input)
{
    $dieRoll = rand(0, 3);

    $mentalMutaton = mentalMutationManifestation($input)[$dieRoll];

    return $mentalMutaton;
}



function getMentalMutationAdjustments($input, $dieRoll)
{
    $select = ($input - 22);
    //$adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    //$adjustmentArray = array();

    if($select == 0)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 1)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 2)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }

    return $adjustmentArray;

}



?>