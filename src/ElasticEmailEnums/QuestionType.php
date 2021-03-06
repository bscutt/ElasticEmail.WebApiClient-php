<?php
	namespace ElasticEmailEnums; 

abstract class QuestionType
{
    /**
     * 
     */
    const RadioButtons = 1;

    /**
     * 
     */
    const DropdownMenu = 2;

    /**
     * 
     */
    const Checkboxes = 3;

    /**
     * 
     */
    const LongAnswer = 4;

    /**
     * 
     */
    const Textbox = 5;

    /**
     * Date in YYYY-MM-DDThh:ii:ss format
     */
    const Date = 6;

}
