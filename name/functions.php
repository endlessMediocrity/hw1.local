<?php

function whatIsName($name)
{
    if (mb_substr($name, -1, 1) == "а" || mb_substr($name, -1, 1) == "я") {
        return "женское имя";
    } else {
        return "мужское имя";
    }
}