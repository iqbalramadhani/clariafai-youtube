<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/status/status_code.proto

namespace Clarifai\Internal\Status;

/**
 * Protobuf enum <code>Clarifai\Api\Status\StatusCode</code>
 */
class _StatusCode
{
    /**
     * Generated from protobuf enum <code>ZERO = 0;</code>
     */
    const ZERO = 0;
    /**
     * Generated from protobuf enum <code>SUCCESS = 10000;</code>
     */
    const SUCCESS = 10000;
    /**
     * Generated from protobuf enum <code>MIXED_STATUS = 10010;</code>
     */
    const MIXED_STATUS = 10010;
    /**
     * Generated from protobuf enum <code>FAILURE = 10020;</code>
     */
    const FAILURE = 10020;
    /**
     * Generated from protobuf enum <code>CONN_ACCOUNT_ISSUES = 11000;</code>
     */
    const CONN_ACCOUNT_ISSUES = 11000;
    /**
     * Generated from protobuf enum <code>CONN_TOKEN_INVALID = 11001;</code>
     */
    const CONN_TOKEN_INVALID = 11001;
    /**
     * Generated from protobuf enum <code>CONN_CREDENTIALS_INVALID = 11002;</code>
     */
    const CONN_CREDENTIALS_INVALID = 11002;
    /**
     * Generated from protobuf enum <code>CONN_EXCEED_HOURLY_LIMIT = 11003;</code>
     */
    const CONN_EXCEED_HOURLY_LIMIT = 11003;
    /**
     * Generated from protobuf enum <code>CONN_EXCEED_MONTHLY_LIMIT = 11004;</code>
     */
    const CONN_EXCEED_MONTHLY_LIMIT = 11004;
    /**
     * Generated from protobuf enum <code>CONN_THROTTLED = 11005;</code>
     */
    const CONN_THROTTLED = 11005;
    /**
     * Generated from protobuf enum <code>CONN_EXCEEDS_LIMITS = 11006;</code>
     */
    const CONN_EXCEEDS_LIMITS = 11006;
    /**
     * Generated from protobuf enum <code>CONN_INSUFFICIENT_SCOPES = 11007;</code>
     */
    const CONN_INSUFFICIENT_SCOPES = 11007;
    /**
     * Generated from protobuf enum <code>CONN_KEY_INVALID = 11008;</code>
     */
    const CONN_KEY_INVALID = 11008;
    /**
     * Generated from protobuf enum <code>CONN_KEY_NOT_FOUND = 11009;</code>
     */
    const CONN_KEY_NOT_FOUND = 11009;
    /**
     * Generated from protobuf enum <code>CONN_BAD_REQUEST_FORMAT = 11100;</code>
     */
    const CONN_BAD_REQUEST_FORMAT = 11100;
    /**
     * Generated from protobuf enum <code>CONN_DOES_NOT_EXIST = 11101;</code>
     */
    const CONN_DOES_NOT_EXIST = 11101;
    /**
     * Generated from protobuf enum <code>CONN_INVALID_REQUEST = 11102;</code>
     */
    const CONN_INVALID_REQUEST = 11102;
    /**
     * Generated from protobuf enum <code>CONN_METHOD_NOT_ALLOWED = 11103;</code>
     */
    const CONN_METHOD_NOT_ALLOWED = 11103;
    /**
     * Generated from protobuf enum <code>MODEL_TRAINED = 21100;</code>
     */
    const MODEL_TRAINED = 21100;
    /**
     * Generated from protobuf enum <code>MODEL_TRAINING = 21101;</code>
     */
    const MODEL_TRAINING = 21101;
    /**
     * Generated from protobuf enum <code>MODEL_UNTRAINED = 21102;</code>
     */
    const MODEL_UNTRAINED = 21102;
    /**
     * Generated from protobuf enum <code>MODEL_QUEUED_FOR_TRAINING = 21103;</code>
     */
    const MODEL_QUEUED_FOR_TRAINING = 21103;
    /**
     * Generated from protobuf enum <code>MODEL_TRAINING_NO_DATA = 21110;</code>
     */
    const MODEL_TRAINING_NO_DATA = 21110;
    /**
     * Generated from protobuf enum <code>MODEL_TRAINING_NO_POSITIVES = 21111;</code>
     */
    const MODEL_TRAINING_NO_POSITIVES = 21111;
    /**
     * Generated from protobuf enum <code>MODEL_TRAINING_ONE_VS_N_SINGLE_CLASS = 21112;</code>
     */
    const MODEL_TRAINING_ONE_VS_N_SINGLE_CLASS = 21112;
    /**
     * Generated from protobuf enum <code>MODEL_TRAINING_TIMED_OUT = 21113;</code>
     */
    const MODEL_TRAINING_TIMED_OUT = 21113;
    /**
     * Generated from protobuf enum <code>MODEL_TRAINING_WAITING_ERROR = 21114;</code>
     */
    const MODEL_TRAINING_WAITING_ERROR = 21114;
    /**
     * Generated from protobuf enum <code>MODEL_TRAINING_UNKNOWN_ERROR = 21115;</code>
     */
    const MODEL_TRAINING_UNKNOWN_ERROR = 21115;
    /**
     * Generated from protobuf enum <code>MODEL_TRAINING_MSG_REDELIVER = 21116;</code>
     */
    const MODEL_TRAINING_MSG_REDELIVER = 21116;
    /**
     * Generated from protobuf enum <code>MODEL_MODIFY_SUCCESS = 21150;</code>
     */
    const MODEL_MODIFY_SUCCESS = 21150;
    /**
     * Generated from protobuf enum <code>MODEL_MODIFY_PENDING = 21151;</code>
     */
    const MODEL_MODIFY_PENDING = 21151;
    /**
     * Generated from protobuf enum <code>MODEL_MODIFY_FAILED = 21152;</code>
     */
    const MODEL_MODIFY_FAILED = 21152;
    /**
     * Generated from protobuf enum <code>MODEL_DOES_NOT_EXIST = 21200;</code>
     */
    const MODEL_DOES_NOT_EXIST = 21200;
    /**
     * Generated from protobuf enum <code>MODEL_PERMISSION_DENIED = 21201;</code>
     */
    const MODEL_PERMISSION_DENIED = 21201;
    /**
     * Generated from protobuf enum <code>MODEL_INVALID_ARGUMENT = 21202;</code>
     */
    const MODEL_INVALID_ARGUMENT = 21202;
    /**
     * Generated from protobuf enum <code>MODEL_INVALID_REQUEST = 21203;</code>
     */
    const MODEL_INVALID_REQUEST = 21203;
    /**
     * Generated from protobuf enum <code>MODEL_EVALUATED = 21300;</code>
     */
    const MODEL_EVALUATED = 21300;
    /**
     * Generated from protobuf enum <code>MODEL_EVALUATING = 21301;</code>
     */
    const MODEL_EVALUATING = 21301;
    /**
     * Generated from protobuf enum <code>MODEL_NOT_EVALUATED = 21302;</code>
     */
    const MODEL_NOT_EVALUATED = 21302;
    /**
     * Generated from protobuf enum <code>MODEL_QUEUED_FOR_EVALUATION = 21303;</code>
     */
    const MODEL_QUEUED_FOR_EVALUATION = 21303;
    /**
     * Generated from protobuf enum <code>MODEL_EVALUATION_TIMED_OUT = 21310;</code>
     */
    const MODEL_EVALUATION_TIMED_OUT = 21310;
    /**
     * Generated from protobuf enum <code>MODEL_EVALUATION_WAITING_ERROR = 21311;</code>
     */
    const MODEL_EVALUATION_WAITING_ERROR = 21311;
    /**
     * Generated from protobuf enum <code>MODEL_EVALUATION_UNKNOWN_ERROR = 21312;</code>
     */
    const MODEL_EVALUATION_UNKNOWN_ERROR = 21312;
    /**
     * Generated from protobuf enum <code>MODEL_PREDICTION_FAILED = 21313;</code>
     */
    const MODEL_PREDICTION_FAILED = 21313;
    /**
     * Generated from protobuf enum <code>MODEL_EVALUATION_MSG_REDELIVER = 21314;</code>
     */
    const MODEL_EVALUATION_MSG_REDELIVER = 21314;
    /**
     * Generated from protobuf enum <code>MODEL_EVALUATION_NEED_LABELS = 21315;</code>
     */
    const MODEL_EVALUATION_NEED_LABELS = 21315;
    /**
     * Generated from protobuf enum <code>MODEL_EVALUATION_NEED_INPUTS = 21316;</code>
     */
    const MODEL_EVALUATION_NEED_INPUTS = 21316;
    /**
     * Generated from protobuf enum <code>WORKFLOW_NO_MATCHING_INPUT = 22001;</code>
     */
    const WORKFLOW_NO_MATCHING_INPUT = 22001;
    /**
     * Generated from protobuf enum <code>WORKFLOW_REQUIRE_TRAINED_MODEL = 22002;</code>
     */
    const WORKFLOW_REQUIRE_TRAINED_MODEL = 22002;
    /**
     * Generated from protobuf enum <code>WORKFLOW_DUPLICATE = 22100;</code>
     */
    const WORKFLOW_DUPLICATE = 22100;
    /**
     * Generated from protobuf enum <code>WORKFLOW_UNSUPPORTED_FORMAT = 22101;</code>
     */
    const WORKFLOW_UNSUPPORTED_FORMAT = 22101;
    /**
     * Generated from protobuf enum <code>WORKFLOW_DOES_NOT_EXIST = 22102;</code>
     */
    const WORKFLOW_DOES_NOT_EXIST = 22102;
    /**
     * Generated from protobuf enum <code>WORKFLOW_PERMISSION_DENIED = 22103;</code>
     */
    const WORKFLOW_PERMISSION_DENIED = 22103;
    /**
     * Generated from protobuf enum <code>WORKFLOW_INVALID_ARGUMENT = 22104;</code>
     */
    const WORKFLOW_INVALID_ARGUMENT = 22104;
    /**
     * Generated from protobuf enum <code>WORKFLOW_INVALID_RECIPE = 22105;</code>
     */
    const WORKFLOW_INVALID_RECIPE = 22105;
    /**
     * Generated from protobuf enum <code>WORKFLOW_INVALID_TEMPLATE = 22106;</code>
     */
    const WORKFLOW_INVALID_TEMPLATE = 22106;
    /**
     * Generated from protobuf enum <code>WORKFLOW_INVALID_GRAPH = 22107;</code>
     */
    const WORKFLOW_INVALID_GRAPH = 22107;
    /**
     * Generated from protobuf enum <code>WORKFLOW_INTERNAL_FAILURE = 22108;</code>
     */
    const WORKFLOW_INTERNAL_FAILURE = 22108;
    /**
     * Generated from protobuf enum <code>WORKFLOW_INVALID_REQUEST = 22999;</code>
     */
    const WORKFLOW_INVALID_REQUEST = 22999;
    /**
     * Generated from protobuf enum <code>WORKFLOW_MODIFY_SUCCESS = 22150;</code>
     */
    const WORKFLOW_MODIFY_SUCCESS = 22150;
    /**
     * Generated from protobuf enum <code>WORKFLOW_MODIFY_PENDING = 22151;</code>
     */
    const WORKFLOW_MODIFY_PENDING = 22151;
    /**
     * Generated from protobuf enum <code>WORKFLOW_MODIFY_FAILED = 22152;</code>
     */
    const WORKFLOW_MODIFY_FAILED = 22152;
    /**
     * Generated from protobuf enum <code>CONCEPT_MODIFY_SUCCESS = 23150;</code>
     */
    const CONCEPT_MODIFY_SUCCESS = 23150;
    /**
     * Generated from protobuf enum <code>CONCEPT_MODIFY_PENDING = 23151;</code>
     */
    const CONCEPT_MODIFY_PENDING = 23151;
    /**
     * Generated from protobuf enum <code>CONCEPT_MODIFY_FAILED = 23152;</code>
     */
    const CONCEPT_MODIFY_FAILED = 23152;
    /**
     * Generated from protobuf enum <code>ANNOTATION_SUCCESS = 24150;</code>
     */
    const ANNOTATION_SUCCESS = 24150;
    /**
     * Generated from protobuf enum <code>ANNOTATION_PENDING = 24151;</code>
     */
    const ANNOTATION_PENDING = 24151;
    /**
     * Generated from protobuf enum <code>ANNOTATION_FAILED = 24152;</code>
     */
    const ANNOTATION_FAILED = 24152;
    /**
     * Generated from protobuf enum <code>ANNOTATION_IN_PROGRESS = 24153;</code>
     */
    const ANNOTATION_IN_PROGRESS = 24153;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_DOWNLOAD_SUCCESS = 30000;</code>
     */
    const INPUT_IMAGE_DOWNLOAD_SUCCESS = 30000;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_DOWNLOAD_PENDING = 30001;</code>
     */
    const INPUT_IMAGE_DOWNLOAD_PENDING = 30001;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_DOWNLOAD_FAILED = 30002;</code>
     */
    const INPUT_IMAGE_DOWNLOAD_FAILED = 30002;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_DOWNLOAD_IN_PROGRESS = 30003;</code>
     */
    const INPUT_IMAGE_DOWNLOAD_IN_PROGRESS = 30003;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_STATUS_UPDATE_FAILED = 30004;</code>
     */
    const INPUT_IMAGE_STATUS_UPDATE_FAILED = 30004;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_DELETE_FAILED = 30005;</code>
     */
    const INPUT_IMAGE_DELETE_FAILED = 30005;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_DUPLICATE = 30100;</code>
     */
    const INPUT_IMAGE_DUPLICATE = 30100;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_UNSUPPORTED_FORMAT = 30101;</code>
     */
    const INPUT_IMAGE_UNSUPPORTED_FORMAT = 30101;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_DOES_NOT_EXIST = 30102;</code>
     */
    const INPUT_IMAGE_DOES_NOT_EXIST = 30102;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_PERMISSION_DENIED = 30103;</code>
     */
    const INPUT_IMAGE_PERMISSION_DENIED = 30103;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_INVALID_ARGUMENT = 30104;</code>
     */
    const INPUT_IMAGE_INVALID_ARGUMENT = 30104;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_MODIFY_SUCCESS = 30200;</code>
     */
    const INPUT_IMAGE_MODIFY_SUCCESS = 30200;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_MODIFY_PENDING = 30201;</code>
     */
    const INPUT_IMAGE_MODIFY_PENDING = 30201;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_MODIFY_FAILED = 30203;</code>
     */
    const INPUT_IMAGE_MODIFY_FAILED = 30203;
    /**
     * Generated from protobuf enum <code>ALL_INPUT_IMAGES_INVALID_BYTES = 30300;</code>
     */
    const ALL_INPUT_IMAGES_INVALID_BYTES = 30300;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_CLUSTER_SUCCESS = 30400;</code>
     */
    const INPUT_IMAGE_CLUSTER_SUCCESS = 30400;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_CLUSTER_PENDING = 30401;</code>
     */
    const INPUT_IMAGE_CLUSTER_PENDING = 30401;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_CLUSTER_FAILED = 30402;</code>
     */
    const INPUT_IMAGE_CLUSTER_FAILED = 30402;
    /**
     * Generated from protobuf enum <code>INPUT_IMAGE_CLUSTER_IN_PROGRESS = 30403;</code>
     */
    const INPUT_IMAGE_CLUSTER_IN_PROGRESS = 30403;
    /**
     * Generated from protobuf enum <code>INPUT_VIDEO_DOWNLOAD_SUCCESS = 31000;</code>
     */
    const INPUT_VIDEO_DOWNLOAD_SUCCESS = 31000;
    /**
     * Generated from protobuf enum <code>INPUT_VIDEO_DOWNLOAD_PENDING = 31001;</code>
     */
    const INPUT_VIDEO_DOWNLOAD_PENDING = 31001;
    /**
     * Generated from protobuf enum <code>INPUT_VIDEO_DOWNLOAD_FAILED = 31002;</code>
     */
    const INPUT_VIDEO_DOWNLOAD_FAILED = 31002;
    /**
     * Generated from protobuf enum <code>INPUT_VIDEO_DUPLICATE = 31100;</code>
     */
    const INPUT_VIDEO_DUPLICATE = 31100;
    /**
     * Generated from protobuf enum <code>INPUT_VIDEO_UNSUPPORTED_FORMAT = 31101;</code>
     */
    const INPUT_VIDEO_UNSUPPORTED_FORMAT = 31101;
    /**
     * Generated from protobuf enum <code>INPUT_VIDEO_DOES_NOT_EXIST = 31102;</code>
     */
    const INPUT_VIDEO_DOES_NOT_EXIST = 31102;
    /**
     * Generated from protobuf enum <code>INPUT_VIDEO_PERMISSION_DENIED = 31103;</code>
     */
    const INPUT_VIDEO_PERMISSION_DENIED = 31103;
    /**
     * Generated from protobuf enum <code>INPUT_VIDEO_INVALID_ARGUMENT = 31104;</code>
     */
    const INPUT_VIDEO_INVALID_ARGUMENT = 31104;
    /**
     * Generated from protobuf enum <code>INPUT_VIDEO_MODIFY_SUCCESS = 31200;</code>
     */
    const INPUT_VIDEO_MODIFY_SUCCESS = 31200;
    /**
     * Generated from protobuf enum <code>INPUT_VIDEO_MODIFY_PENDING = 31201;</code>
     */
    const INPUT_VIDEO_MODIFY_PENDING = 31201;
    /**
     * Generated from protobuf enum <code>INPUT_VIDEO_MODIFY_FAILED = 31203;</code>
     */
    const INPUT_VIDEO_MODIFY_FAILED = 31203;
    /**
     * Generated from protobuf enum <code>REQUEST_DISABLED_FOR_MAINTENANCE = 39997;</code>
     */
    const REQUEST_DISABLED_FOR_MAINTENANCE = 39997;
    /**
     * Generated from protobuf enum <code>INPUT_WRITES_DISABLED_FOR_MAINTENANCE = 39998;</code>
     */
    const INPUT_WRITES_DISABLED_FOR_MAINTENANCE = 39998;
    /**
     * Generated from protobuf enum <code>INPUT_INVALID_REQUEST = 39999;</code>
     */
    const INPUT_INVALID_REQUEST = 39999;
    /**
     * Generated from protobuf enum <code>PREDICT_INVALID_REQUEST = 40001;</code>
     */
    const PREDICT_INVALID_REQUEST = 40001;
    /**
     * Generated from protobuf enum <code>SEARCH_INVALID_REQUEST = 40002;</code>
     */
    const SEARCH_INVALID_REQUEST = 40002;
    /**
     * Generated from protobuf enum <code>CONCEPTS_INVALID_REQUEST = 40003;</code>
     */
    const CONCEPTS_INVALID_REQUEST = 40003;
    /**
     * Generated from protobuf enum <code>DATABASE_DUPLICATE_KEY = 40010;</code>
     */
    const DATABASE_DUPLICATE_KEY = 40010;
    /**
     * Generated from protobuf enum <code>DATABASE_STATEMENT_TIMEOUT = 40011;</code>
     */
    const DATABASE_STATEMENT_TIMEOUT = 40011;
    /**
     * Generated from protobuf enum <code>DATABASE_INVALID_ROWS_AFFECTED = 40012;</code>
     */
    const DATABASE_INVALID_ROWS_AFFECTED = 40012;
    /**
     * Generated from protobuf enum <code>DATABASE_DEADLOCK_DETECTED = 40013;</code>
     */
    const DATABASE_DEADLOCK_DETECTED = 40013;
    /**
     * Generated from protobuf enum <code>DATABASE_FAIL_TASK = 40014;</code>
     */
    const DATABASE_FAIL_TASK = 40014;
    /**
     * Generated from protobuf enum <code>DATABASE_FAIL_TO_GET_CONNECTIONS = 40015;</code>
     */
    const DATABASE_FAIL_TO_GET_CONNECTIONS = 40015;
    /**
     * Generated from protobuf enum <code>DATABASE_TOO_MANY_CLIENTS = 40016;</code>
     */
    const DATABASE_TOO_MANY_CLIENTS = 40016;
    /**
     * Generated from protobuf enum <code>DATABASE_CONSTRAINT_VIOLATED = 40017;</code>
     */
    const DATABASE_CONSTRAINT_VIOLATED = 40017;
    /**
     * Generated from protobuf enum <code>ASYNC_WORKER_MULTI_ERRORS = 40020;</code>
     */
    const ASYNC_WORKER_MULTI_ERRORS = 40020;
    /**
     * Generated from protobuf enum <code>RPC_REQUEST_QUEUE_FULL = 40030;</code>
     */
    const RPC_REQUEST_QUEUE_FULL = 40030;
    /**
     * Generated from protobuf enum <code>RPC_SERVER_UNAVAILABLE = 40031;</code>
     */
    const RPC_SERVER_UNAVAILABLE = 40031;
    /**
     * Generated from protobuf enum <code>RPC_REQUEST_TIMEOUT = 40032;</code>
     */
    const RPC_REQUEST_TIMEOUT = 40032;
    /**
     * Generated from protobuf enum <code>RPC_MAX_MESSAGE_SIZE_EXCEEDED = 40033;</code>
     */
    const RPC_MAX_MESSAGE_SIZE_EXCEEDED = 40033;
    /**
     * Generated from protobuf enum <code>RPC_CANCELED = 40035;</code>
     */
    const RPC_CANCELED = 40035;
    /**
     * Generated from protobuf enum <code>CLUSTER_INTERNAL_FAILURE = 43040;</code>
     */
    const CLUSTER_INTERNAL_FAILURE = 43040;
    /**
     * Generated from protobuf enum <code>EXTERNAL_CONNECTION_ERROR = 40034;</code>
     */
    const EXTERNAL_CONNECTION_ERROR = 40034;
    /**
     * Generated from protobuf enum <code>QUEUE_CONN_ERROR = 41000;</code>
     */
    const QUEUE_CONN_ERROR = 41000;
    /**
     * Generated from protobuf enum <code>QUEUE_CLOSE_REQUEST_TIMEOUT = 41002;</code>
     */
    const QUEUE_CLOSE_REQUEST_TIMEOUT = 41002;
    /**
     * Generated from protobuf enum <code>QUEUE_CONN_CLOSED = 41003;</code>
     */
    const QUEUE_CONN_CLOSED = 41003;
    /**
     * Generated from protobuf enum <code>QUEUE_PUBLISH_ACK_TIMEOUT = 41004;</code>
     */
    const QUEUE_PUBLISH_ACK_TIMEOUT = 41004;
    /**
     * Generated from protobuf enum <code>QUEUE_PUBLISH_ERROR = 41005;</code>
     */
    const QUEUE_PUBLISH_ERROR = 41005;
    /**
     * Generated from protobuf enum <code>QUEUE_SUBSCRIPTION_TIMEOUT = 41006;</code>
     */
    const QUEUE_SUBSCRIPTION_TIMEOUT = 41006;
    /**
     * Generated from protobuf enum <code>QUEUE_SUBSCRIPTION_ERROR = 41007;</code>
     */
    const QUEUE_SUBSCRIPTION_ERROR = 41007;
    /**
     * Generated from protobuf enum <code>QUEUE_MARSHALLING_FAILED = 41008;</code>
     */
    const QUEUE_MARSHALLING_FAILED = 41008;
    /**
     * Generated from protobuf enum <code>QUEUE_UNMARSHALLING_FAILED = 41009;</code>
     */
    const QUEUE_UNMARSHALLING_FAILED = 41009;
    /**
     * Generated from protobuf enum <code>QUEUE_MAX_MSG_REDELIVERY_EXCEEDED = 41010;</code>
     */
    const QUEUE_MAX_MSG_REDELIVERY_EXCEEDED = 41010;
    /**
     * Generated from protobuf enum <code>QUEUE_ACK_FAILURE = 41011;</code>
     */
    const QUEUE_ACK_FAILURE = 41011;
    /**
     * Generated from protobuf enum <code>SQS_OVERLIMIT = 41100;</code>
     */
    const SQS_OVERLIMIT = 41100;
    /**
     * Generated from protobuf enum <code>SQS_INVALID_RECEIPT_HANDLE = 41101;</code>
     */
    const SQS_INVALID_RECEIPT_HANDLE = 41101;
    /**
     * Generated from protobuf enum <code>SQS_UNKNOWN = 41102;</code>
     */
    const SQS_UNKNOWN = 41102;
    /**
     * Generated from protobuf enum <code>VISUALIZATION_SUCCESS = 42000;</code>
     */
    const VISUALIZATION_SUCCESS = 42000;
    /**
     * Generated from protobuf enum <code>VISUALIZATION_PENDING = 42001;</code>
     */
    const VISUALIZATION_PENDING = 42001;
    /**
     * Generated from protobuf enum <code>VISUALIZATION_FAILED = 42002;</code>
     */
    const VISUALIZATION_FAILED = 42002;
    /**
     * Generated from protobuf enum <code>VISUALIZATION_INVALID_REQUEST = 42003;</code>
     */
    const VISUALIZATION_INVALID_REQUEST = 42003;
    /**
     * Generated from protobuf enum <code>MISSING_APP_VISUALIZATION = 42004;</code>
     */
    const MISSING_APP_VISUALIZATION = 42004;
    /**
     * Generated from protobuf enum <code>VISUALIZATION_TOO_MANY_URLS = 42005;</code>
     */
    const VISUALIZATION_TOO_MANY_URLS = 42005;
    /**
     * Generated from protobuf enum <code>VISUALIZATION_FAILED_TO_SAMPLE_APP = 42006;</code>
     */
    const VISUALIZATION_FAILED_TO_SAMPLE_APP = 42006;
    /**
     * Generated from protobuf enum <code>VISUALIZATION_FAILED_TO_EMBED = 42007;</code>
     */
    const VISUALIZATION_FAILED_TO_EMBED = 42007;
    /**
     * Generated from protobuf enum <code>VISUALIZATION_S3_ERROR = 42008;</code>
     */
    const VISUALIZATION_S3_ERROR = 42008;
    /**
     * Generated from protobuf enum <code>SEARCH_INTERNAL_FAILURE = 43001;</code>
     */
    const SEARCH_INTERNAL_FAILURE = 43001;
    /**
     * Generated from protobuf enum <code>SEARCH_PROJECTION_FAILURE = 43002;</code>
     */
    const SEARCH_PROJECTION_FAILURE = 43002;
    /**
     * Generated from protobuf enum <code>SEARCH_PREDICTION_FAILURE = 43003;</code>
     */
    const SEARCH_PREDICTION_FAILURE = 43003;
    /**
     * Generated from protobuf enum <code>SEARCH_BY_NOT_FULLY_INDEXED_INPUT = 43004;</code>
     */
    const SEARCH_BY_NOT_FULLY_INDEXED_INPUT = 43004;
    /**
     * Generated from protobuf enum <code>STRIPE_EVENT_ERROR = 44001;</code>
     */
    const STRIPE_EVENT_ERROR = 44001;
    /**
     * Generated from protobuf enum <code>CACHE_MISS = 45001;</code>
     */
    const CACHE_MISS = 45001;
    /**
     * Generated from protobuf enum <code>REDIS_SCRIPT_EXITED_WITH_FAILURE = 45002;</code>
     */
    const REDIS_SCRIPT_EXITED_WITH_FAILURE = 45002;
    /**
     * Generated from protobuf enum <code>SIGNUP_EVENT_ERROR = 46001;</code>
     */
    const SIGNUP_EVENT_ERROR = 46001;
    /**
     * Generated from protobuf enum <code>SIGNUP_FLAGGED = 46002;</code>
     */
    const SIGNUP_FLAGGED = 46002;
    /**
     * Generated from protobuf enum <code>APP_COUNT_INVALID_MESSAGE = 47001;</code>
     */
    const APP_COUNT_INVALID_MESSAGE = 47001;
    /**
     * Generated from protobuf enum <code>APP_COUNT_UPDATE_INCREMENT_FAILED = 47002;</code>
     */
    const APP_COUNT_UPDATE_INCREMENT_FAILED = 47002;
    /**
     * Generated from protobuf enum <code>APP_COUNT_REBUILD_FAILED = 47003;</code>
     */
    const APP_COUNT_REBUILD_FAILED = 47003;
    /**
     * Generated from protobuf enum <code>APP_COUNT_INTERNAL_FAILURE = 47004;</code>
     */
    const APP_COUNT_INTERNAL_FAILURE = 47004;
    /**
     * Generated from protobuf enum <code>MP_DOWNLOAD_ERROR = 47101;</code>
     */
    const MP_DOWNLOAD_ERROR = 47101;
    /**
     * Generated from protobuf enum <code>MP_RESOLVE_DNS_ERROR = 47102;</code>
     */
    const MP_RESOLVE_DNS_ERROR = 47102;
    /**
     * Generated from protobuf enum <code>MP_DOWNLOAD_MAX_SIZE_EXCEEDED_ERROR = 47103;</code>
     */
    const MP_DOWNLOAD_MAX_SIZE_EXCEEDED_ERROR = 47103;
    /**
     * Generated from protobuf enum <code>MP_IMAGE_DECODE_ERROR = 47104;</code>
     */
    const MP_IMAGE_DECODE_ERROR = 47104;
    /**
     * Generated from protobuf enum <code>MP_INVALID_ARGUMENT = 47105;</code>
     */
    const MP_INVALID_ARGUMENT = 47105;
    /**
     * Generated from protobuf enum <code>MP_IMAGE_PROCESSING_ERROR = 47106;</code>
     */
    const MP_IMAGE_PROCESSING_ERROR = 47106;
    /**
     * Generated from protobuf enum <code>USER_CONSERNT_FACE = 50001;</code>
     */
    const USER_CONSERNT_FACE = 50001;
    /**
     * Generated from protobuf enum <code>WORKER_ACTIVE = 51001;</code>
     */
    const WORKER_ACTIVE = 51001;
    /**
     * Generated from protobuf enum <code>WORKER_INACTIVE = 51002;</code>
     */
    const WORKER_INACTIVE = 51002;
    /**
     * Generated from protobuf enum <code>INTERNAL_SERVER_ISSUE = 98004;</code>
     */
    const INTERNAL_SERVER_ISSUE = 98004;
    /**
     * Generated from protobuf enum <code>INTERNAL_FETCHING_ISSUE = 98005;</code>
     */
    const INTERNAL_FETCHING_ISSUE = 98005;
    /**
     * Generated from protobuf enum <code>INTERNAL_DATABASE_ISSUE = 98006;</code>
     */
    const INTERNAL_DATABASE_ISSUE = 98006;
    /**
     * Generated from protobuf enum <code>INTERNAL_UNEXPECTED_TIMEOUT = 98009;</code>
     */
    const INTERNAL_UNEXPECTED_TIMEOUT = 98009;
    /**
     * Generated from protobuf enum <code>INTERNAL_UNEXPECTED_V1 = 98010;</code>
     */
    const INTERNAL_UNEXPECTED_V1 = 98010;
    /**
     * Generated from protobuf enum <code>INTERNAL_UNEXPECTED_PANIC = 98011;</code>
     */
    const INTERNAL_UNEXPECTED_PANIC = 98011;
    /**
     * Generated from protobuf enum <code>INTERNAL_UNEXPECTED_SPIRE = 98012;</code>
     */
    const INTERNAL_UNEXPECTED_SPIRE = 98012;
    /**
     * Generated from protobuf enum <code>INTERNAL_REDIS_UNAVAILABLE = 98013;</code>
     */
    const INTERNAL_REDIS_UNAVAILABLE = 98013;
    /**
     * Generated from protobuf enum <code>INTERNAL_RESOURCE_EXHAUSTED = 98014;</code>
     */
    const INTERNAL_RESOURCE_EXHAUSTED = 98014;
    /**
     * Generated from protobuf enum <code>INTERNAL_REDIS_UNCATEGORIZED = 98015;</code>
     */
    const INTERNAL_REDIS_UNCATEGORIZED = 98015;
    /**
     * Generated from protobuf enum <code>CONN_UNCATEGORIZED = 99001;</code>
     */
    const CONN_UNCATEGORIZED = 99001;
    /**
     * Generated from protobuf enum <code>MODEL_UNCATEGORIZED = 99002;</code>
     */
    const MODEL_UNCATEGORIZED = 99002;
    /**
     * Generated from protobuf enum <code>INPUT_UNCATEGORIZED = 99003;</code>
     */
    const INPUT_UNCATEGORIZED = 99003;
    /**
     * Generated from protobuf enum <code>INTERNAL_UNCATEGORIZED = 99009;</code>
     */
    const INTERNAL_UNCATEGORIZED = 99009;
    /**
     * Generated from protobuf enum <code>BAD_REQUEST = 90400;</code>
     */
    const BAD_REQUEST = 90400;
    /**
     * Generated from protobuf enum <code>SERVER_ERROR = 90500;</code>
     */
    const SERVER_ERROR = 90500;
}

