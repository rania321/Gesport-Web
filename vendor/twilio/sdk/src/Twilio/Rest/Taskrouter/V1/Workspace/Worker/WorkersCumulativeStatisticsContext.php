<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Taskrouter
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Taskrouter\V1\Workspace\Worker;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class WorkersCumulativeStatisticsContext extends InstanceContext
    {
    /**
     * Initialize the WorkersCumulativeStatisticsContext
     *
     * @param Version $version Version that contains the resource
     * @param string $workspaceSid The SID of the Workspace with the resource to fetch.
     */
    public function __construct(
        Version $version,
        $workspaceSid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'workspaceSid' =>
            $workspaceSid,
        ];

        $this->uri = '/Workspaces/' . \rawurlencode($workspaceSid)
        .'/Workers/CumulativeStatistics';
    }

    /**
     * Fetch the WorkersCumulativeStatisticsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WorkersCumulativeStatisticsInstance Fetched WorkersCumulativeStatisticsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): WorkersCumulativeStatisticsInstance
    {

        $options = new Values($options);

        $params = Values::of([
            'EndDate' =>
                Serialize::iso8601DateTime($options['endDate']),
            'Minutes' =>
                $options['minutes'],
            'StartDate' =>
                Serialize::iso8601DateTime($options['startDate']),
            'TaskChannel' =>
                $options['taskChannel'],
        ]);

        $payload = $this->version->fetch('GET', $this->uri, $params, []);

        return new WorkersCumulativeStatisticsInstance(
            $this->version,
            $payload,
            $this->solution['workspaceSid']
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Taskrouter.V1.WorkersCumulativeStatisticsContext ' . \implode(' ', $context) . ']';
    }
}