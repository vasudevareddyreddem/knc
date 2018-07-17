ALTER TABLE `cartinhoursstaging_db`.`orders`   
  ADD COLUMN `razorpay_payment_id` TEXT NULL AFTER `hash`,
  ADD COLUMN `razorpay_order_id` TEXT NULL AFTER `razorpay_payment_id`,
  ADD COLUMN `razorpay_signature` TEXT NULL AFTER `razorpay_order_id`;
