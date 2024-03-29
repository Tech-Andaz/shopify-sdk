<?php

/***********************************************************************************************************************
* This file is auto-generated. If you have an issue, please create a GitHub issue.                                     *
***********************************************************************************************************************/

declare(strict_types=1);

namespace ShopifyTest\Rest;

use Shopify\Auth\Session;
use Shopify\Context;
use Shopify\Rest\Admin2022_10\GiftCard;
use ShopifyTest\BaseTestCase;
use ShopifyTest\Clients\MockRequest;

final class GiftCard202210Test extends BaseTestCase
{
    /** @var Session */
    private $test_session;

    public function setUp(): void
    {
        parent::setUp();

        Context::$API_VERSION = "2022-10";

        $this->test_session = new Session("session_id", "test-shop.myshopify.io", true, "1234");
        $this->test_session->setAccessToken("this_is_a_test_token");
    }

    /**

     *
     * @return void
     */
    public function test_1(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["gift_cards" => [["id" => 766118925, "balance" => "25.00", "created_at" => "2023-10-13T04:55:00-04:00", "updated_at" => "2023-10-13T04:55:00-04:00", "currency" => "USD", "initial_value" => "50.00", "disabled_at" => null, "line_item_id" => null, "api_client_id" => null, "user_id" => null, "customer_id" => null, "note" => null, "expires_on" => "2022-10-13", "template_suffix" => null, "recipient_id" => null, "message" => null, "send_on" => null, "notify" => true, "last_characters" => "0e0e", "order_id" => null], ["id" => 10274553, "balance" => "0.00", "created_at" => "2023-10-13T04:55:00-04:00", "updated_at" => "2023-10-13T04:55:00-04:00", "currency" => "USD", "initial_value" => "50.00", "disabled_at" => null, "line_item_id" => null, "api_client_id" => null, "user_id" => null, "customer_id" => null, "note" => null, "expires_on" => null, "template_suffix" => null, "recipient_id" => null, "message" => null, "send_on" => null, "notify" => true, "last_characters" => "0y0y", "order_id" => null]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2022-10/gift_cards.json?status=enabled",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        GiftCard::all(
            $this->test_session,
            [],
            ["status" => "enabled"],
        );
    }

    /**

     *
     * @return void
     */
    public function test_2(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["gift_cards" => [["id" => 1035197676, "balance" => "100.00", "created_at" => "2023-10-13T04:55:00-04:00", "updated_at" => "2023-10-13T04:55:00-04:00", "currency" => "USD", "initial_value" => "100.00", "disabled_at" => null, "line_item_id" => null, "api_client_id" => null, "user_id" => null, "customer_id" => null, "note" => null, "expires_on" => null, "template_suffix" => null, "recipient_id" => null, "message" => null, "send_on" => null, "notify" => true, "last_characters" => "0d0d", "order_id" => null], ["id" => 766118925, "balance" => "25.00", "created_at" => "2023-10-13T04:55:00-04:00", "updated_at" => "2023-10-13T04:55:00-04:00", "currency" => "USD", "initial_value" => "50.00", "disabled_at" => null, "line_item_id" => null, "api_client_id" => null, "user_id" => null, "customer_id" => null, "note" => null, "expires_on" => "2022-10-13", "template_suffix" => null, "recipient_id" => null, "message" => null, "send_on" => null, "notify" => true, "last_characters" => "0e0e", "order_id" => null], ["id" => 10274553, "balance" => "0.00", "created_at" => "2023-10-13T04:55:00-04:00", "updated_at" => "2023-10-13T04:55:00-04:00", "currency" => "USD", "initial_value" => "50.00", "disabled_at" => null, "line_item_id" => null, "api_client_id" => null, "user_id" => null, "customer_id" => null, "note" => null, "expires_on" => null, "template_suffix" => null, "recipient_id" => null, "message" => null, "send_on" => null, "notify" => true, "last_characters" => "0y0y", "order_id" => null]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2022-10/gift_cards.json",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        GiftCard::all(
            $this->test_session,
            [],
            [],
        );
    }

    /**

     *
     * @return void
     */
    public function test_3(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["gift_card" => ["id" => 1035197676, "balance" => "100.00", "created_at" => "2023-10-13T04:55:00-04:00", "updated_at" => "2023-10-13T04:55:00-04:00", "currency" => "USD", "initial_value" => "100.00", "disabled_at" => null, "line_item_id" => null, "api_client_id" => null, "user_id" => null, "customer_id" => null, "note" => null, "expires_on" => null, "template_suffix" => null, "last_characters" => "0d0d", "order_id" => null]]
                )),
                "https://test-shop.myshopify.io/admin/api/2022-10/gift_cards/1035197676.json",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        GiftCard::find(
            $this->test_session,
            1035197676,
            [],
            [],
        );
    }

    /**

     *
     * @return void
     */
    public function test_4(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["gift_card" => ["expires_on" => "2020-01-01", "template_suffix" => null, "initial_value" => "100.00", "balance" => "100.00", "customer_id" => null, "id" => 1035197676, "created_at" => "2023-10-13T04:55:00-04:00", "updated_at" => "2023-10-13T04:55:36-04:00", "currency" => "USD", "disabled_at" => null, "line_item_id" => null, "api_client_id" => null, "user_id" => null, "note" => null, "last_characters" => "0d0d", "order_id" => null]]
                )),
                "https://test-shop.myshopify.io/admin/api/2022-10/gift_cards/1035197676.json",
                "PUT",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["gift_card" => ["expires_on" => "2020-01-01"]]),
            ),
        ]);

        $gift_card = new GiftCard($this->test_session);
        $gift_card->id = 1035197676;
        $gift_card->expires_on = "2020-01-01";
        $gift_card->save();
    }

    /**

     *
     * @return void
     */
    public function test_5(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["gift_card" => ["note" => "Updating with a new note", "template_suffix" => null, "initial_value" => "100.00", "balance" => "100.00", "customer_id" => null, "id" => 1035197676, "created_at" => "2023-10-13T04:55:00-04:00", "updated_at" => "2023-10-13T04:55:43-04:00", "currency" => "USD", "disabled_at" => null, "line_item_id" => null, "api_client_id" => null, "user_id" => null, "expires_on" => null, "last_characters" => "0d0d", "order_id" => null]]
                )),
                "https://test-shop.myshopify.io/admin/api/2022-10/gift_cards/1035197676.json",
                "PUT",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["gift_card" => ["note" => "Updating with a new note"]]),
            ),
        ]);

        $gift_card = new GiftCard($this->test_session);
        $gift_card->id = 1035197676;
        $gift_card->note = "Updating with a new note";
        $gift_card->save();
    }

    /**

     *
     * @return void
     */
    public function test_6(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["count" => 3]
                )),
                "https://test-shop.myshopify.io/admin/api/2022-10/gift_cards/count.json",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        GiftCard::count(
            $this->test_session,
            [],
            [],
        );
    }

    /**

     *
     * @return void
     */
    public function test_7(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["count" => 3]
                )),
                "https://test-shop.myshopify.io/admin/api/2022-10/gift_cards/count.json?status=enabled",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        GiftCard::count(
            $this->test_session,
            [],
            ["status" => "enabled"],
        );
    }

    /**

     *
     * @return void
     */
    public function test_8(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["gift_card" => ["id" => 1063936337, "balance" => "100.00", "created_at" => "2023-10-13T04:55:31-04:00", "updated_at" => "2023-10-13T04:55:31-04:00", "currency" => "USD", "initial_value" => "100.00", "disabled_at" => null, "line_item_id" => null, "api_client_id" => 755357713, "user_id" => null, "customer_id" => null, "note" => "This is a note", "expires_on" => null, "template_suffix" => "gift_cards.birthday.liquid", "last_characters" => "mnop", "order_id" => null, "code" => "abcdefghijklmnop"]]
                )),
                "https://test-shop.myshopify.io/admin/api/2022-10/gift_cards.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["gift_card" => ["note" => "This is a note", "initial_value" => "100.00", "code" => "ABCD EFGH IJKL MNOP", "template_suffix" => "gift_cards.birthday.liquid"]]),
            ),
        ]);

        $gift_card = new GiftCard($this->test_session);
        $gift_card->note = "This is a note";
        $gift_card->initial_value = "100.00";
        $gift_card->code = "ABCD EFGH IJKL MNOP";
        $gift_card->template_suffix = "gift_cards.birthday.liquid";
        $gift_card->save();
    }

    /**

     *
     * @return void
     */
    public function test_9(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["gift_card" => ["id" => 1063936339, "balance" => "25.00", "created_at" => "2023-10-13T04:55:37-04:00", "updated_at" => "2023-10-13T04:55:37-04:00", "currency" => "USD", "initial_value" => "25.00", "disabled_at" => null, "line_item_id" => null, "api_client_id" => 755357713, "user_id" => null, "customer_id" => null, "note" => null, "expires_on" => null, "template_suffix" => null, "last_characters" => "bffc", "order_id" => null, "code" => "5hf626ae24acbffc"]]
                )),
                "https://test-shop.myshopify.io/admin/api/2022-10/gift_cards.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["gift_card" => ["initial_value" => "25.00"]]),
            ),
        ]);

        $gift_card = new GiftCard($this->test_session);
        $gift_card->initial_value = "25.00";
        $gift_card->save();
    }

    /**

     *
     * @return void
     */
    public function test_10(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["gift_card" => ["id" => 1063936338, "balance" => "100.00", "created_at" => "2023-10-13T04:55:34-04:00", "updated_at" => "2023-10-13T04:55:34-04:00", "currency" => "USD", "initial_value" => "100.00", "disabled_at" => null, "line_item_id" => null, "api_client_id" => 755357713, "user_id" => null, "customer_id" => null, "note" => null, "expires_on" => null, "template_suffix" => null, "last_characters" => "adb6", "order_id" => null, "code" => "e5cb9aag25c8adb6"]]
                )),
                "https://test-shop.myshopify.io/admin/api/2022-10/gift_cards.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["gift_card" => ["initial_value" => "100.00", "recipient_id" => 207119551, "message" => "Happy birthday!", "send_on" => "2023-12-31T19:00:00-05:00"]]),
            ),
        ]);

        $gift_card = new GiftCard($this->test_session);
        $gift_card->initial_value = "100.00";
        $gift_card->recipient_id = 207119551;
        $gift_card->message = "Happy birthday!";
        $gift_card->send_on = "2023-12-31T19:00:00-05:00";
        $gift_card->save();
    }

    /**

     *
     * @return void
     */
    public function test_11(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["gift_card" => ["disabled_at" => "2023-10-13T04:55:33-04:00", "template_suffix" => null, "initial_value" => "100.00", "balance" => "100.00", "customer_id" => null, "id" => 1035197676, "created_at" => "2023-10-13T04:55:00-04:00", "updated_at" => "2023-10-13T04:55:33-04:00", "currency" => "USD", "line_item_id" => null, "api_client_id" => null, "user_id" => null, "note" => null, "expires_on" => null, "last_characters" => "0d0d", "order_id" => null]]
                )),
                "https://test-shop.myshopify.io/admin/api/2022-10/gift_cards/1035197676/disable.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["gift_card" => ["id" => 1035197676]]),
            ),
        ]);

        $gift_card = new GiftCard($this->test_session);
        $gift_card->id = 1035197676;
        $gift_card->disable(
            [],
            ["gift_card" => ["id" => 1035197676]],
        );
    }

    /**

     *
     * @return void
     */
    public function test_12(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["gift_cards" => [["id" => 1063936342, "balance" => "10.00", "created_at" => "2023-10-13T04:55:39-04:00", "updated_at" => "2023-10-13T04:55:39-04:00", "currency" => "USD", "initial_value" => "10.00", "disabled_at" => null, "line_item_id" => null, "api_client_id" => null, "user_id" => null, "customer_id" => null, "note" => null, "expires_on" => null, "template_suffix" => null, "recipient_id" => null, "message" => null, "send_on" => null, "notify" => true, "last_characters" => "mnop", "order_id" => null]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2022-10/gift_cards/search.json?query=last_characters%3Amnop",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        GiftCard::search(
            $this->test_session,
            [],
            ["query" => "last_characters:mnop"],
        );
    }

}
