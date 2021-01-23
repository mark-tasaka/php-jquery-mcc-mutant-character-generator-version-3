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



?>