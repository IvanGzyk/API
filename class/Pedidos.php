<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pedidos
 *
 * @author I.A.Gzyk
 */
class Pedidos {

    private $token;
    private $url_envio;
    private $url_consulat;
    private $access_token;
    private $status;
    private $id;
    private $date;
    private $hour;
    private $customer_id;
    private $partial_total;
    private $taxes;
    private $discount;
    private $point_sale;
    private $shipment;
    private $shipment_value;
    private $shipment_date;
    private $delivered;
    private $store_note;
    private $customer_note;
    private $partner_id;
    private $discount_coupon;
    private $payment_method_rate;
    private $installment;
    private $value_1;
    private $sending_code;
    private $sending_date;
    private $billing_address;
    private $delivery_time;
    private $payment_method_id;
    private $payment_method;
    private $session_id;
    private $total;
    private $access_code;
    private $shipment_integrator;
    private $modified;
    private $id_quotation;
    private $estimated_delivery_date;
    private $is_traceable;
    private $external_code;
    private $total_comission_user;
    private $total_comission;
    private $OrderStatus = Array('type', 'allow_edit_order');
    private $ProductsSold = Array('id');
    
    function __construct() {
        
    }
    function getToken() {
        return $this->token;
    }

    function getUrl_envio() {
        return $this->url_envio;
    }

    function getUrl_consulat() {
        return $this->url_consulat;
    }

    function getAccess_token() {
        return $this->access_token;
    }

    function getStatus() {
        return $this->status;
    }

    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getHour() {
        return $this->hour;
    }

    function getCustomer_id() {
        return $this->customer_id;
    }

    function getPartial_total() {
        return $this->partial_total;
    }

    function getTaxes() {
        return $this->taxes;
    }

    function getDiscount() {
        return $this->discount;
    }

    function getPoint_sale() {
        return $this->point_sale;
    }

    function getShipment() {
        return $this->shipment;
    }

    function getShipment_value() {
        return $this->shipment_value;
    }

    function getShipment_date() {
        return $this->shipment_date;
    }

    function getDelivered() {
        return $this->delivered;
    }

    function getStore_note() {
        return $this->store_note;
    }

    function getCustomer_note() {
        return $this->customer_note;
    }

    function getPartner_id() {
        return $this->partner_id;
    }

    function getDiscount_coupon() {
        return $this->discount_coupon;
    }

    function getPayment_method_rate() {
        return $this->payment_method_rate;
    }

    function getInstallment() {
        return $this->installment;
    }

    function getValue_1() {
        return $this->value_1;
    }

    function getSending_code() {
        return $this->sending_code;
    }

    function getSending_date() {
        return $this->sending_date;
    }

    function getBilling_address() {
        return $this->billing_address;
    }

    function getDelivery_time() {
        return $this->delivery_time;
    }

    function getPayment_method_id() {
        return $this->payment_method_id;
    }

    function getPayment_method() {
        return $this->payment_method;
    }

    function getSession_id() {
        return $this->session_id;
    }

    function getTotal() {
        return $this->total;
    }

    function getAccess_code() {
        return $this->access_code;
    }

    function getShipment_integrator() {
        return $this->shipment_integrator;
    }

    function getModified() {
        return $this->modified;
    }

    function getId_quotation() {
        return $this->id_quotation;
    }

    function getEstimated_delivery_date() {
        return $this->estimated_delivery_date;
    }

    function getIs_traceable() {
        return $this->is_traceable;
    }

    function getExternal_code() {
        return $this->external_code;
    }

    function getTotal_comission_user() {
        return $this->total_comission_user;
    }

    function getTotal_comission() {
        return $this->total_comission;
    }

    function getOrderStatus() {
        return $this->OrderStatus;
    }

    function getProductsSold() {
        return $this->ProductsSold;
    }

    function setToken($token): void {
        $this->token = $token;
    }

    function setUrl_envio($url_envio): void {
        $this->url_envio = $url_envio;
    }

    function setUrl_consulat($url_consulat): void {
        $this->url_consulat = $url_consulat;
    }

    function setAccess_token($access_token): void {
        $this->access_token = $access_token;
    }

    function setStatus($status): void {
        $this->status = $status;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setDate($date): void {
        $this->date = $date;
    }

    function setHour($hour): void {
        $this->hour = $hour;
    }

    function setCustomer_id($customer_id): void {
        $this->customer_id = $customer_id;
    }

    function setPartial_total($partial_total): void {
        $this->partial_total = $partial_total;
    }

    function setTaxes($taxes): void {
        $this->taxes = $taxes;
    }

    function setDiscount($discount): void {
        $this->discount = $discount;
    }

    function setPoint_sale($point_sale): void {
        $this->point_sale = $point_sale;
    }

    function setShipment($shipment): void {
        $this->shipment = $shipment;
    }

    function setShipment_value($shipment_value): void {
        $this->shipment_value = $shipment_value;
    }

    function setShipment_date($shipment_date): void {
        $this->shipment_date = $shipment_date;
    }

    function setDelivered($delivered): void {
        $this->delivered = $delivered;
    }

    function setStore_note($store_note): void {
        $this->store_note = $store_note;
    }

    function setCustomer_note($customer_note): void {
        $this->customer_note = $customer_note;
    }

    function setPartner_id($partner_id): void {
        $this->partner_id = $partner_id;
    }

    function setDiscount_coupon($discount_coupon): void {
        $this->discount_coupon = $discount_coupon;
    }

    function setPayment_method_rate($payment_method_rate): void {
        $this->payment_method_rate = $payment_method_rate;
    }

    function setInstallment($installment): void {
        $this->installment = $installment;
    }

    function setValue_1($value_1): void {
        $this->value_1 = $value_1;
    }

    function setSending_code($sending_code): void {
        $this->sending_code = $sending_code;
    }

    function setSending_date($sending_date): void {
        $this->sending_date = $sending_date;
    }

    function setBilling_address($billing_address): void {
        $this->billing_address = $billing_address;
    }

    function setDelivery_time($delivery_time): void {
        $this->delivery_time = $delivery_time;
    }

    function setPayment_method_id($payment_method_id): void {
        $this->payment_method_id = $payment_method_id;
    }

    function setPayment_method($payment_method): void {
        $this->payment_method = $payment_method;
    }

    function setSession_id($session_id): void {
        $this->session_id = $session_id;
    }

    function setTotal($total): void {
        $this->total = $total;
    }

    function setAccess_code($access_code): void {
        $this->access_code = $access_code;
    }

    function setShipment_integrator($shipment_integrator): void {
        $this->shipment_integrator = $shipment_integrator;
    }

    function setModified($modified): void {
        $this->modified = $modified;
    }

    function setId_quotation($id_quotation): void {
        $this->id_quotation = $id_quotation;
    }

    function setEstimated_delivery_date($estimated_delivery_date): void {
        $this->estimated_delivery_date = $estimated_delivery_date;
    }

    function setIs_traceable($is_traceable): void {
        $this->is_traceable = $is_traceable;
    }

    function setExternal_code($external_code): void {
        $this->external_code = $external_code;
    }

    function setTotal_comission_user($total_comission_user): void {
        $this->total_comission_user = $total_comission_user;
    }

    function setTotal_comission($total_comission): void {
        $this->total_comission = $total_comission;
    }

    function setOrderStatus($OrderStatus): void {
        $this->OrderStatus = $OrderStatus;
    }

    function setProductsSold($ProductsSold): void {
        $this->ProductsSold = $ProductsSold;
    }

}
