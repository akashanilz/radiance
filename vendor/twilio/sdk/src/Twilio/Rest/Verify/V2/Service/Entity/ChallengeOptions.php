<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Verify\V2\Service\Entity;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class ChallengeOptions {
    /**
     * @param \DateTime $expirationDate The date-time when this Challenge expires
     * @param string $detailsMessage Shown to the user when the push notification
     *                               arrives
     * @param array[] $detailsFields A list of objects that describe the Fields
     *                               included in the Challenge
     * @param array $hiddenDetails Hidden details provided to contextualize the
     *                             Challenge
     * @param string $authPayload Optional payload to verify the Challenge
     * @return CreateChallengeOptions Options builder
     */
    public static function create(\DateTime $expirationDate = Values::NONE, string $detailsMessage = Values::NONE, array $detailsFields = Values::ARRAY_NONE, array $hiddenDetails = Values::ARRAY_NONE, string $authPayload = Values::NONE): CreateChallengeOptions {
        return new CreateChallengeOptions($expirationDate, $detailsMessage, $detailsFields, $hiddenDetails, $authPayload);
    }

    /**
     * @param string $factorSid Factor Sid.
     * @param string $status The Status of theChallenges to fetch
     * @return ReadChallengeOptions Options builder
     */
    public static function read(string $factorSid = Values::NONE, string $status = Values::NONE): ReadChallengeOptions {
        return new ReadChallengeOptions($factorSid, $status);
    }

    /**
     * @param string $authPayload Optional payload to verify the Challenge
     * @return UpdateChallengeOptions Options builder
     */
    public static function update(string $authPayload = Values::NONE): UpdateChallengeOptions {
        return new UpdateChallengeOptions($authPayload);
    }
}

class CreateChallengeOptions extends Options {
    /**
     * @param \DateTime $expirationDate The date-time when this Challenge expires
     * @param string $detailsMessage Shown to the user when the push notification
     *                               arrives
     * @param array[] $detailsFields A list of objects that describe the Fields
     *                               included in the Challenge
     * @param array $hiddenDetails Hidden details provided to contextualize the
     *                             Challenge
     * @param string $authPayload Optional payload to verify the Challenge
     */
    public function __construct(\DateTime $expirationDate = Values::NONE, string $detailsMessage = Values::NONE, array $detailsFields = Values::ARRAY_NONE, array $hiddenDetails = Values::ARRAY_NONE, string $authPayload = Values::NONE) {
        $this->options['expirationDate'] = $expirationDate;
        $this->options['detailsMessage'] = $detailsMessage;
        $this->options['detailsFields'] = $detailsFields;
        $this->options['hiddenDetails'] = $hiddenDetails;
        $this->options['authPayload'] = $authPayload;
    }

    /**
     * The date-time when this Challenge expires, given in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. The default value is five (5) minutes after Challenge creation. The max value is sixty (60) minutes after creation.
     *
     * @param \DateTime $expirationDate The date-time when this Challenge expires
     * @return $this Fluent Builder
     */
    public function setExpirationDate(\DateTime $expirationDate): self {
        $this->options['expirationDate'] = $expirationDate;
        return $this;
    }

    /**
     * Shown to the user when the push notification arrives. Required when `factor_type` is `push`
     *
     * @param string $detailsMessage Shown to the user when the push notification
     *                               arrives
     * @return $this Fluent Builder
     */
    public function setDetailsMessage(string $detailsMessage): self {
        $this->options['detailsMessage'] = $detailsMessage;
        return $this;
    }

    /**
     * A list of objects that describe the Fields included in the Challenge. Each object contains the label and value of the field. Used when `factor_type` is `push`.
     *
     * @param array[] $detailsFields A list of objects that describe the Fields
     *                               included in the Challenge
     * @return $this Fluent Builder
     */
    public function setDetailsFields(array $detailsFields): self {
        $this->options['detailsFields'] = $detailsFields;
        return $this;
    }

    /**
     * Details provided to give context about the Challenge. Not shown to the end user. It must be a stringified JSON with only strings values eg. `{"ip": "172.168.1.234"}`
     *
     * @param array $hiddenDetails Hidden details provided to contextualize the
     *                             Challenge
     * @return $this Fluent Builder
     */
    public function setHiddenDetails(array $hiddenDetails): self {
        $this->options['hiddenDetails'] = $hiddenDetails;
        return $this;
    }

    /**
     * Optional payload used to verify the Challenge upon creation. Only used with a Factor of type `totp` to carry an OTP used in the verification.
     *
     * @param string $authPayload Optional payload to verify the Challenge
     * @return $this Fluent Builder
     */
    public function setAuthPayload(string $authPayload): self {
        $this->options['authPayload'] = $authPayload;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Verify.V2.CreateChallengeOptions ' . $options . ']';
    }
}

class ReadChallengeOptions extends Options {
    /**
     * @param string $factorSid Factor Sid.
     * @param string $status The Status of theChallenges to fetch
     */
    public function __construct(string $factorSid = Values::NONE, string $status = Values::NONE) {
        $this->options['factorSid'] = $factorSid;
        $this->options['status'] = $status;
    }

    /**
     * The unique SID identifier of the Factor.
     *
     * @param string $factorSid Factor Sid.
     * @return $this Fluent Builder
     */
    public function setFactorSid(string $factorSid): self {
        $this->options['factorSid'] = $factorSid;
        return $this;
    }

    /**
     * The Status of the Challenges to fetch. One of `pending`, `expired`, `approved` or `denied`.
     *
     * @param string $status The Status of theChallenges to fetch
     * @return $this Fluent Builder
     */
    public function setStatus(string $status): self {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Verify.V2.ReadChallengeOptions ' . $options . ']';
    }
}

class UpdateChallengeOptions extends Options {
    /**
     * @param string $authPayload Optional payload to verify the Challenge
     */
    public function __construct(string $authPayload = Values::NONE) {
        $this->options['authPayload'] = $authPayload;
    }

    /**
     * The optional payload needed to verify the Challenge. E.g., a TOTP would use the numeric code.
     *
     * @param string $authPayload Optional payload to verify the Challenge
     * @return $this Fluent Builder
     */
    public function setAuthPayload(string $authPayload): self {
        $this->options['authPayload'] = $authPayload;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Verify.V2.UpdateChallengeOptions ' . $options . ']';
    }
}