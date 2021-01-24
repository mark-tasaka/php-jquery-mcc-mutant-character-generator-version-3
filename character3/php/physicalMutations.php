<?php

function getPhysicalMutationName($input)
{
    //Active Mutations 0-10
    //Passive Mutations 11-25
    $mutationName = array("Amplimorph", "Electrical Generation", "Extra Senses", "Gas Generation", "Holographic Skin", "Light Generation", "Metamorph", "Radiation Generation", "Regeneration", "Sonic Generation", "Symbiotic Touch", "Carapace", "Claws", "Heightened Agility", "Heightened Stamina", "Heightened Strength", "Increased Speed", "Infravision", "Multiple Body Parts", "New Body Parts", "Plasticity", "Shorter", "Spines", "Taller", "Ultravision","Wings");

    return $mutationName[$input];
}

function getPhyicalMutationType($input)
{
    if($input <= 10)
    {
        $type = "Active";
    }
    else
    {
        $type = "Passive";
    }

    return $type;
}


function physicalMutationManifestation($input)
{
    $a00 = array("The mutant doubles over in pain as the size change takes effect.",
                "The mutant’s skin roils as muscle and bone reshape.",
                "The mutant’s body appears to strobe as he changes size in small increments.",
                "The mutant is surrounded by a nimbus of rotating electrons.");

    $a01 = array("The mutant’s feet glow and a directional pulse of current travels through the ground to target.",
                "The mutant’s hands glow and twin arcs of electricity shoot out from them to target.",
                "The hair on the mutant’s body stands on end as a tesla arc of electricity jumps from the mutant’s mid-section to target.",
                "The mutant’s body crackles and glows as balls of electricity form in the mutants hands that can be thrown at target.");

    $a02 = array("The mutant has bat-like ears and can effectively see in the dark via echolocation.",
                      "The mutant has a flicking, extensible tongue which allows the mutant to sense other creatures and objects by taste and smell.",
                      "The mutant has insectoid antennae that act as motion detectors.",
                      "The mutant skin acts as a radiation detector, sensing micro-changes in heat and radiation.");

    $a03 = array("A jet of gas is exhaled from the mutant’s mouth.",
                "Twin streams of gas pour from special orifices located in the palms of the mutants hands or manipulative members.",
                "The mutant’s body exudes gas from pores in the mutant’s skin.",
                "Through concentration, the mutant is able to transmute a localized pocket of air into an efficacious gas.");

    $a04 = array("The mutant’s appearance becomes that of a barely noticeable silhouette.",
                      "The mutant’s appearance briefly inverts into a color negative of itself before vanishing.",
                      "The mutant’s body shimmers in a rainbow banded light and then vanishes.",
                      "The mutant’s body appears to loose dimensionality, first along the horizontal plane, then along the vertical.");

    $a05 = array("The mutant’s hands flash brightly.",
    "The mutant’s eyes shoot twin beams of light.",
    "The mutant’s skin momentarily incandesces in a flash of light.",
    "The mutant’s body is momentarily surrounded by a globe of bright light which collects itself at his chest before discharging.");

    $a06 = array("The mutant’s skin shimmers and twists as the change takes place.",
                      "The mutant’s body appears to rapidly rotate in multiple blurred bands of movement.",
                      "An image of the intended new shape flickers briefly in the mutant’s pupils immediately prior to the change.",
                      "The mutant’s body briefly becomes wavy and gelatinous as it transitions into the new shape.");

    $a07 = array("The mutant’s body glows with a bright blue halo.",
                    "The mutant’s hands are surrounded by a blue nimbus of orbiting electrons.",
                    "The mutant’s eyes fire twin blasts of searing blue light.",
                    "The mutant’s body flashes blue/white for one second, and then a small mushroom Cloud roils upwards from him or her.");
                    
    $a08 = array("The mutant’s body is bathed in a soft white glow when healing.",
    "The mutant’s body shimmers and sparkles as cells divide and regrow.",
    "Any visible wounds on the mutant’s body immediately fill with an opaque white gel which solidifies into flesh and bone.",
    "The mutant’s body roils as existing tissues shoot fleshy tendrils over wounds and then gradually rebuild damaged areas.");

    $a09 = array("Concentric waves of sonic energy erupt from the mutant’s mouth as a high-pitched scream.",
                      "The mutant’s fingertips project blasts of sonic energy.",
                      "A small organ in the mutant’s forehead emits sonic pulses.",
                      "The mutant emits pulsating waves of sonic energy directly from his or her chest.");

    $a10 = array("The mutant’s fingers end in tiny suction cups.",
                      "The mutant’s forearms shoot out serpentine tendrils.",
                      "Whatever part of the mutant that is in direct physical contact with the target merges with the skin of the target.",
                      "The mutant’s head is surrounded by a semi-transparent holographic projection of the face of the target creature.");

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

function getPhysicalMutationManifestation($input)
{
    $dieRoll = rand(0, 3);

    $physicalMutaton = physicalMutationManifestation($input)[$dieRoll];

    return $physicalMutaton;
}


   /*           
function physicalMutationActiveEffect($input)
{
    $a00 = array("Failure, mutation results in cosmetic change only; non-protective skin change.",
                "The mutant’s natural AC increases by +2",
                "The mutant’s natural AC increases by +3, +1 to Fortitude saves.",
                ".",
                ".",
                ".");

    $a01 = array(".",
                ".",
                ".",
                ".",
                ".",
                ".");

    $a02 = array(".",
                ".",
                ".",
                ".",
                ".",
                ".");

    $a03 = array(".",
                ".",
                ".",
                ".",
                ".",
                ".");

    $a04 = array(".",
                ".",
                ".",
                ".",
                ".",
                ".");
                
    $a05 = array(".",
                ".",
                ".",
                ".",
                ".",
                ".");

    $a06 = array(".",
                ".",
                ".",
                ".",
                ".",
                ".");


    $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15;
    
    return $array1[$input];
    
}*/


function getPhyicalMutationEffect($input)
{
    if($input <= 10)
    {
        $effect = "A mutation check roll each time the active mutation is used.";
    }
    else
    {
        $select = $input - 11;
        $dieRoll = rand(0, 5);

    }
}


?>