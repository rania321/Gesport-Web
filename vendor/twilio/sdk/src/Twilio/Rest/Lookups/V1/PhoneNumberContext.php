<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Lookups
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Lookups\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class PhoneNumberContext extends InstanceContext
    {
    /**
     * Initialize the PhoneNumberContext
     *
     * @param Version $version Version that contains the resource
     * @param string $phoneNumber The phone number to lookup in [E.164](https://www.twilio.com/docs/glossary/what-e164) format, which consists of a + followed by the country code and subscriber number.
     */
    public function __construct(
        Version $version,
        $phoneNumber
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'phoneNumber' =>
            $phoneNumber,
        ];

        $this->uri = '/PhoneNumbers/' . \rawurlencode($phoneNumber)
        .'';
    }

    /**
     * Fetch the PhoneNumberInstance
     *
     * @param array|Options $options Optional Arguments
     * @return PhoneNumberInstance Fetched PhoneNumberInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): PhoneNumberInstance
    {

        $options = new Values($options);

        $params = Values::of([
            'CountryCode' =>
                $options['countryCode'],
            'Type' =>
                Serialize::map($options['type'], function ($e) { return $e; }),
            'AddOns' =>
                Serialize::map($options['addOns'], function ($e) { return $e; }),
        ]);
        $params = \array_merge($params, Serialize::prefixedCollapsibleMap($options['addOnsData'], 'AddOns'));

        $payload = $this->version->fetch('GET', $this->uri, $params, []);

        return new PhoneNumberInstance(
            $this->version,
            $payload,
            $this->solution['phoneNumber']
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
        return '[Twilio.Lookups.V1.PhoneNumberContext ' . \implode(' ', $context) . ']';
    }
}