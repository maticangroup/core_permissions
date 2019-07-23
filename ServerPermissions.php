<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 23/07/19
 * Time: 15:37
 */

namespace App\Permissions;


class ServerPermissions
{
    const repository_company_all = 'repository_company_all';
    const repository_company_fetch = 'repository_company_fetch';
    const repository_company_delete = 'repository_company_delete';
    const repository_company_update = 'repository_company_update';
    const repository_company_new = 'repository_company_new';
    const repository_company_get_phones = 'repository_company_get_phones';
    const repository_company_add_phone = 'repository_company_add_phone';
    const repository_company_remove_phone = 'repository_company_remove_phone';
    const repository_company_get_locations = 'repository_company_get_locations';
    const repository_company_add_location = 'repository_company_add_location';
    const repository_company_remove_location = 'repository_company_remove_location';
    const repository_company_get_related_people = 'repository_company_get_related_people';
    const repository_company_remove_related_person = 'repository_company_remove_related_person';
    const repository_company_add_related_person = 'repository_company_add_related_person';
    const repository_company_get_employees = 'repository_company_get_employees';
    const repository_company_add_employee = 'repository_company_add_employee';
    const repository_company_remove_employee = 'repository_company_remove_employee';

    const repository_brand_all = 'repository_brand_all';
    const repository_brand_fetch = 'repository_brand_fetch';
    const repository_brand_update = 'repository_brand_update';
    const repository_brand_new = 'repository_brand_new';
    const repository_brand_delete = 'repository_brand_delete';
    const repository_brand_add_supplier = 'repository_brand_add_supplier';
    const repository_brand_remove_supplier = 'repository_brand_remove_supplier';
    const repository_brand_get_suppliers = 'repository_brand_get_suppliers';
    const repository_brand_set_logo = 'repository_brand_set_logo';

    const repository_color_all = 'repository_color_all';
    const repository_color_fetch = 'repository_color_fetch';
    const repository_color_delete = 'repository_color_delete';
    const repository_color_update = 'repository_color_update';
    const repository_color_new = 'repository_color_new';
    const repository_color_change_status = 'repository_color_change_status';

    const repository_guarantee_all = 'repository_guarantee_all';
    const repository_guarantee_fetch = 'repository_guarantee_fetch';
    const repository_guarantee_delete = 'repository_guarantee_delete';
    const repository_guarantee_update = 'repository_guarantee_update';
    const repository_guarantee_new = 'repository_guarantee_new';
    const repository_guarantee_change_guarantee_status = 'repository_guarantee_change_guarantee_status';
    const repository_guarantee_get_providers = 'repository_guarantee_get_providers';
    const repository_guarantee_add_provider = 'repository_guarantee_add_provider';
    const repository_guarantee_fetch_provider = 'repository_guarantee_fetch_provider';
    const repository_guarantee_update_provider = 'repository_guarantee_update_provider';
    const repository_guarantee_change_provider_status = 'repository_guarantee_change_provider_status';
    const repository_guarantee_get_durations = 'repository_guarantee_get_durations';
    const repository_guarantee_add_duration = 'repository_guarantee_add_duration';
    const repository_guarantee_fetch_duration = 'repository_guarantee_fetch_duration';
    const repository_guarantee_update_duration = 'repository_guarantee_update_duration';
    const repository_guarantee_change_duration_status = 'repository_guarantee_change_duration_status';


    const repository_itemcategory_all = 'repository_itemcategory_all';
    const repository_itemcategory_fetch = 'repository_itemcategory_fetch';
    const repository_itemcategory_delete = 'repository_itemcategory_delete';
    const repository_itemcategory_update = 'repository_itemcategory_update';
    const repository_itemcategory_new = 'repository_itemcategory_new';
    const repository_itemcategory_assign_keys = 'repository_itemcategory_assign_keys';


    const repository_item_all = 'repository_item_all';
    const repository_item_fetch = 'repository_item_fetch';
    const repository_item_update = 'repository_item_update';
    const repository_item_new = 'repository_item_new';
    const repository_item_get_types = 'repository_item_get_types';
    const repository_item_add_barcode = 'repository_item_add_barcode';
    const repository_item_remove_barcode = 'repository_item_remove_barcode';
    const repository_item_add_available_guarantee = 'repository_item_add_available_guarantee';
    const repository_item_remove_available_guarantee = 'repository_item_remove_available_guarantee';
    const repository_item_add_available_supplier = 'repository_item_add_available_supplier';
    const repository_item_remove_available_supplier = 'repository_item_remove_available_supplier';
    const repository_item_add_available_color = 'repository_item_add_available_color';
    const repository_item_remove_available_color = 'repository_item_remove_available_color';
    const repository_item_update_category = 'repository_item_update_category';
    const repository_item_add_spec_key_value = 'repository_item_add_spec_key_value';
    const repository_item_remove_spec_key_value = 'repository_item_remove_spec_key_value';
    const repository_item_fetch_products = 'repository_item_fetch_products';
    const repository_item_add_image = 'repository_item_add_image';
    const repository_item_remove_image = 'repository_item_remove_image';

    const repository_location_remove = 'repository_location_remove';
    const repository_location_new = 'repository_location_new';
    const repository_location_get_provinces = 'repository_location_get_provinces';


    const repository_offdays_all = 'repository_offdays_all';
    const repository_offdays_fetch = 'repository_offdays_fetch';
    const repository_offdays_delete = 'repository_offdays_delete';
    const repository_offdays_update = 'repository_offdays_update';
    const repository_offdays_new = 'repository_offdays_new';

    const repository_person_all = 'repository_person_all';
    const repository_person_fetch = 'repository_person_fetch';
    const repository_person_delete = 'repository_person_delete';
    const repository_person_update = 'repository_person_update';
    const repository_person_quick_register = 'repository_person_quick_register';
    const repository_person_new = 'repository_person_new';
    const repository_person_get_favorite_items = 'repository_person_get_favorite_items';
    const repository_person_add_favorite_item = 'repository_person_add_favorite_item';
    const repository_person_remove_favorite_item = 'repository_person_remove_favorite_item';
    const repository_person_add_coupon_usage = 'repository_person_add_coupon_usage';
    const repository_person_get_coupon_usages = 'repository_person_get_coupon_usages';
    const repository_person_get_account_balance = 'repository_person_get_account_balance';
    const repository_person_add_address = 'repository_person_add_address';
    const repository_person_remove_address = 'repository_person_remove_address';
    const repository_person_get_all_addresses = 'repository_person_get_all_addresses';
    const repository_person_update_address = 'repository_person_update_address';
    const repository_person_get_related_companies = 'repository_person_get_related_companies';
    const repository_person_add_related_company = 'repository_person_add_related_company';
    const repository_person_remove_related_company = 'repository_person_remove_related_company';
    const repository_person_get_coupon_groups = 'repository_person_get_coupon_groups';
    const repository_person_get_clients = 'repository_person_get_clients';
    const repository_person_remove_bank_account = 'repository_person_remove_bank_account';

    const repository_size_all = 'repository_size_all';
    const repository_size_fetch = 'repository_size_fetch';
    const repository_size_delete = 'repository_size_delete';
    const repository_size_update = 'repository_size_update';
    const repository_size_new = 'repository_size_new';
    const repository_size_change_size_status = 'repository_size_change_size_status';


    const repository_specgroup_all = 'repository_specgroup_all';
    const repository_specgroup_fetch = 'repository_specgroup_fetch';
    const repository_specgroup_delete = 'repository_specgroup_delete';
    const repository_specgroup_update = 'repository_specgroup_update';
    const repository_specgroup_new = 'repository_specgroup_new';
    const repository_specgroup_set_display_order = 'repository_specgroup_set_display_order';
    const repository_specgroup_add_spec_key = 'repository_specgroup_add_spec_key';
    const repository_specgroup_remove_spec_key = 'repository_specgroup_remove_spec_key';
    const repository_specgroup_get_spec_keys = 'repository_specgroup_get_spec_keys';

    const repository_speckey_fetch = 'repository_speckey_fetch';
    const repository_speckey_delete = 'repository_speckey_delete';
    const repository_speckey_update = 'repository_speckey_update';
    const repository_speckey_new = 'repository_speckey_new';
    const repository_speckey_submit_key_value = 'repository_speckey_submit_key_value';
    const repository_speckey_remove_key_value = 'repository_speckey_remove_key_value';

    const repository_weekdays_all = 'repository_weekdays_all';
    const repository_weekdays_fetch = 'repository_weekdays_fetch';
    const repository_weekdays_delete = 'repository_weekdays_delete';
    const repository_weekdays_edit = 'repository_weekdays_edit';
    const repository_weekdays_new = 'repository_weekdays_new';

}