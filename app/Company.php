<?php namespace Convolog;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    public $fillable = [ 'name' ];

    /**
     * Return the list of companies in a select box format
     * @return mixed
     */
    public static function fetch_all_in_a_list()
	{
	    return Company::orderBy( 'name' )->lists( 'name' , 'id' );

	}

    /**
     * Need to return the ID of the company,
     * The company may exist in which case just return the data.
     * If not, create the company then return the ID
     *
     * @param $data
     * @return mixed
     */
    public static function create_new_or_user_existing( $data )
    {

        if ( isset( $data['company_select'] ) )
        {
            if ( strlen( $data['company_select'] ) > 0 ){
                return $data['company_select'];
            }
        }

        if ( isset( $data['company_new'] ) )
        {
            $company_id = Company::save_new_company( $data['company_new'] );

            return $company_id;
        }

    }


    /**
     * Method to store the new company
     *
     * @param $name
     * @return mixed
     */
    public static function save_new_company( $name )
    {
        $company = Company::create( [ 'name' => $name] );

        return $company->id;
    }

    /**
     * Method to find a company name based on the ID
     *
     * @param $id
     * @return mixed
     */
    public static function find_company_name( $id )
    {
        try{

            $company = Company::where( 'id' , $id )->first();

            return $company['name'];
        }
        catch ( Exception $e){
            return 'Not Found';
        }
    }

}
