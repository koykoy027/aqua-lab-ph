<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chem extends Model
{
    use HasFactory;
    protected $table = 'raw_datas';
    protected $fillable = [
        'analysis_id',
        'chem1_instrument_reading_1',
        'chem1_instrument_reading_2',
        'chem1_instrument_reading_3',
        'chem1_average_instrument_reading',
        'chem1_final_result',
        'chem1_final_result_remarks',
        'chem2_instrument_reading_1',
        'chem2_instrument_reading_2',
        'chem2_instrument_reading_3',
        'chem2_average_instrument_reading',
        'chem2_final_result',
        'chem2_final_result_remarks',
        'chem3_initial_wt_of_evaporating_dish_replicate_1',
        'chem3_final_wt_of_evaporating_dish_replicate_1',
        'chem3_wt_of_residue_replicate_1',
        'chem3_initial_wt_of_evaporating_dish_replicate_2',
        'chem3_final_wt_of_evaporating_dish_replicate_2',
        'chem3_wt_of_residue_replicate_2',
        'chem3_average_wt_of_residue',
        'chem3_final_result',
        'chem3_final_result_remarks',
        'chem4_instrument_reading',
        'chem4_final_result',
        'chem4_final_result_remarks',
        'chem5_instrument_reading_1',
        'chem5_instrument_reading_2',
        'chem5_instrument_reading_3',
        'chem5_average_instrument_reading',
        'chem5_final_result',
        'chem5_final_result_remarks',
        'chem6_instrument_reading_1',
        'chem6_instrument_reading_2',
        'chem6_instrument_reading_3',
        'chem6_average_instrument_reading',
        'chem6_final_result',
        'chem6_final_result_remarks',
        'chem7_instrument_reading_1',
        'chem7_instrument_reading_2',
        'chem7_instrument_reading_3',
        'chem7_average_instrument_reading',
        'chem7_final_result',
        'chem7_final_result_remarks',
        'chem9_instrument_reading_1',
        'chem9_instrument_reading_2',
        'chem9_instrument_reading_3',
        'chem9_average_instrument_reading',
        'chem9_final_result',
        'chem9_final_result_remarks',
        'chem10_instrument_reading_1',
        'chem10_instrument_reading_2',
        'chem10_instrument_reading_3',
        'chem10_average_instrument_reading',
        'chem10_final_result',
        'chem10_final_result_remarks',
    ];
}