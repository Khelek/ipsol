<?php namespace Admin\Blogs;
use Lang, Subscription, AdminController, View, Response;

class SubscriptionsController extends AdminController {

    protected $subscription;

    public function __construct(Subscription $subscription)
    {
        parent::__construct();
        $this->subscription = $subscription;
    }

	public function index()
	{
        $title = Lang::get('admin/blogs/title.blog_management');

        $subscriptions = \Subscription::all();

        return View::make('admin/blogs/subscriptions/index', compact('title', 'subscriptions'));
	}


    public function unload()
    {
        $subscriptions = \Subscription::all();
        $columns = ["email", "created_at"];
        $firstRow = ["Email", "Дата создания"];
        return $this->unloadToCsv($subscriptions, ['columns' => $columns, 'firstRow' => $firstRow]);
    }


    // get from http://amitavroy.com/justread/content/articles/creating-csv-output-database-query-result-laravel-4
    private function unloadToCsv($data, $options)
    {
        // setting the csv header
        if (is_array($options) && isset($options['headers']) && is_array($options['headers'])) {
            $headers = $options['headers'];
        } else {
            $headers = array(
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="ExportFileName.csv"'
            );
        }

        $output = '';

        // setting the first row of the csv if provided in options array
        if (isset($options['firstRow']) && is_array($options['firstRow'])) {
            $output .= implode(',', $options['firstRow']);
            $output .= "\n"; // new line after the first line
        }

        // setting the columns for the csv. if columns provided, then fetching the or else object keys
        if (isset($options['columns']) && is_array($options['columns'])) {
            $columns = $options['columns'];
        } else {
            $objectKeys = get_object_vars($data[0]);
            $columns = array_keys($objectKeys);
        }

        // populating the main output string
        foreach ($data as $row) {
            foreach ($columns as $column) {
                $output .= str_replace(',', ';', $row->$column);
                $output .= ',';
            }
            $output .= "\n";
        }

        // calling the Response class make function inside my class to send the response.
        // if our class is not a controller, this is required.
        return Response::make($output, 200, $headers);
    }
}
