<?php




function getDefectsAdjustments($input, $dieRoll)
{
    $select = ($input - 2);

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

            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }

    return $adjustmentArray;

}




?>
