CREATE TABLE IF NOT EXISTS "migrations" (
	"id"	integer NOT NULL,
	"migration"	varchar NOT NULL,
	"batch"	integer NOT NULL,
	PRIMARY KEY("id" AUTOINCREMENT)
);

CREATE TABLE IF NOT EXISTS "users" (
	"id"	integer NOT NULL,
	"name"	varchar NOT NULL,
	"birthday"	date,
	"gender"	varchar,
	"email"	varchar NOT NULL,
	"role"	varchar NOT NULL DEFAULT 'USER',
	"email_verified_at"	datetime,
	"password"	varchar NOT NULL,
	"remember_token"	varchar,
	"created_at"	datetime,
	"updated_at"	datetime,
	"theme"	varchar DEFAULT 'default',
	"theme_color"	varchar,
	"avatar_url"	varchar,
	"stripe_id"	varchar,
	"pm_type"	varchar,
	"pm_last_four"	varchar,
	"trial_ends_at"	datetime,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "password_reset_tokens" (
	"email"	varchar NOT NULL,
	"token"	varchar NOT NULL,
	"created_at"	datetime,
	PRIMARY KEY("email")
);
CREATE TABLE IF NOT EXISTS "sessions" (
	"id"	varchar NOT NULL,
	"user_id"	integer,
	"ip_address"	varchar,
	"user_agent"	text,
	"payload"	text NOT NULL,
	"last_activity"	integer NOT NULL,
	PRIMARY KEY("id")
);
CREATE TABLE IF NOT EXISTS "cache" (
	"key"	varchar NOT NULL,
	"value"	text NOT NULL,
	"expiration"	integer NOT NULL,
	PRIMARY KEY("key")
);
CREATE TABLE IF NOT EXISTS "cache_locks" (
	"key"	varchar NOT NULL,
	"owner"	varchar NOT NULL,
	"expiration"	integer NOT NULL,
	PRIMARY KEY("key")
);
CREATE TABLE IF NOT EXISTS "jobs" (
	"id"	integer NOT NULL,
	"queue"	varchar NOT NULL,
	"payload"	text NOT NULL,
	"attempts"	integer NOT NULL,
	"reserved_at"	integer,
	"available_at"	integer NOT NULL,
	"created_at"	integer NOT NULL,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "job_batches" (
	"id"	varchar NOT NULL,
	"name"	varchar NOT NULL,
	"total_jobs"	integer NOT NULL,
	"pending_jobs"	integer NOT NULL,
	"failed_jobs"	integer NOT NULL,
	"failed_job_ids"	text NOT NULL,
	"options"	text,
	"cancelled_at"	integer,
	"created_at"	integer NOT NULL,
	"finished_at"	integer,
	PRIMARY KEY("id")
);
CREATE TABLE IF NOT EXISTS "failed_jobs" (
	"id"	integer NOT NULL,
	"uuid"	varchar NOT NULL,
	"connection"	text NOT NULL,
	"queue"	text NOT NULL,
	"payload"	text NOT NULL,
	"exception"	text NOT NULL,
	"failed_at"	datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "blogs" (
	"id"	integer NOT NULL,
	"attachment"	text NOT NULL,
	"title"	varchar NOT NULL,
	"descriptions"	text NOT NULL,
	"articles_type"	varchar NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "activities" (
	"id"	integer NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	"attachment"	varchar NOT NULL,
	"title"	varchar NOT NULL,
	"description"	text NOT NULL,
	"activity_type"	varchar NOT NULL,
	"activity_date"	date NOT NULL,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "orders" (
	"id"	integer NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	"user_id"	integer NOT NULL,
	"status"	varchar NOT NULL CHECK("status" IN ('delivered', 'pending', 'canceled')),
	"payment_method"	varchar NOT NULL CHECK("payment_method" IN ('stripe')),
	"email"	varchar,
	FOREIGN KEY("user_id") REFERENCES "users"("id") on delete restrict,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "supports" (
	"id"	integer NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	"user_id"	integer NOT NULL,
	"object"	varchar NOT NULL,
	"message"	text NOT NULL,
	FOREIGN KEY("user_id") REFERENCES "users"("id") on delete restrict,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "media" (
	"id"	integer NOT NULL,
	"model_type"	varchar NOT NULL,
	"model_id"	integer NOT NULL,
	"uuid"	varchar,
	"collection_name"	varchar NOT NULL,
	"name"	varchar NOT NULL,
	"file_name"	varchar NOT NULL,
	"mime_type"	varchar,
	"disk"	varchar NOT NULL,
	"conversions_disk"	varchar,
	"size"	integer NOT NULL,
	"manipulations"	text NOT NULL,
	"custom_properties"	text NOT NULL,
	"generated_conversions"	text NOT NULL,
	"responsive_images"	text NOT NULL,
	"order_column"	integer,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "breezy_sessions" (
	"id"	integer NOT NULL,
	"authenticatable_type"	varchar NOT NULL,
	"authenticatable_id"	integer NOT NULL,
	"panel_id"	varchar,
	"guard"	varchar,
	"ip_address"	varchar,
	"user_agent"	text,
	"expires_at"	datetime,
	"two_factor_secret"	text,
	"two_factor_recovery_codes"	text,
	"two_factor_confirmed_at"	datetime,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "categories" (
	"id"	integer NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	"title"	varchar NOT NULL,
	"description"	text NOT NULL,
	"status"	tinyint(1) NOT NULL,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "products" (
	"id"	integer NOT NULL,
	"name"	varchar NOT NULL,
	"price"	float NOT NULL,
	"quantity"	integer NOT NULL,
	"description"	text NOT NULL,
	"attachment"	varchar NOT NULL,
	"dimensions"	varchar NOT NULL,
	"color"	varchar NOT NULL,
	"discount"	integer,
	"category_id"	integer NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	FOREIGN KEY("category_id") REFERENCES "categories"("id") on delete restrict,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "order_product" (
	"order_id"	integer NOT NULL,
	"product_id"	integer NOT NULL,
	"quanity"	integer NOT NULL,
	"total_amount"	float NOT NULL
);
CREATE TABLE IF NOT EXISTS "contacts" (
	"id"	integer NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "subscriptions" (
	"id"	integer NOT NULL,
	"user_id"	integer NOT NULL,
	"type"	varchar NOT NULL,
	"stripe_id"	varchar NOT NULL,
	"stripe_status"	varchar NOT NULL,
	"stripe_price"	varchar,
	"quantity"	integer,
	"trial_ends_at"	datetime,
	"ends_at"	datetime,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "subscription_items" (
	"id"	integer NOT NULL,
	"subscription_id"	integer NOT NULL,
	"stripe_id"	varchar NOT NULL,
	"stripe_product"	varchar NOT NULL,
	"stripe_price"	varchar NOT NULL,
	"quantity"	integer,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("id" AUTOINCREMENT)
);
INSERT INTO "migrations" VALUES (1,'0001_01_01_000000_create_users_table',1);
INSERT INTO "migrations" VALUES (2,'0001_01_01_000001_create_cache_table',1);
INSERT INTO "migrations" VALUES (3,'0001_01_01_000002_create_jobs_table',1);
INSERT INTO "migrations" VALUES (4,'2024_05_17_134602_create_blogs_table',1);
INSERT INTO "migrations" VALUES (5,'2024_05_17_134608_create_activities_table',1);
INSERT INTO "migrations" VALUES (6,'2024_05_17_134623_create_orders_table',1);
INSERT INTO "migrations" VALUES (7,'2024_05_17_134630_create_supports_table',1);
INSERT INTO "migrations" VALUES (8,'2024_05_17_182252_add_themes_settings_to_users_table',1);
INSERT INTO "migrations" VALUES (9,'2024_05_17_210958_create_media_table',1);
INSERT INTO "migrations" VALUES (10,'2024_05_17_211136_create_breezy_sessions_table',1);
INSERT INTO "migrations" VALUES (11,'2024_05_17_212722_add_avatar_url_column_to_users_table',1);
INSERT INTO "migrations" VALUES (12,'2024_05_18_142318_create_categories_table',1);
INSERT INTO "migrations" VALUES (13,'2024_05_18_143110_create_products_table',1);
INSERT INTO "migrations" VALUES (14,'2024_05_19_094448_create_order_product_table',1);
INSERT INTO "migrations" VALUES (15,'2024_05_19_181600_create_contacts_table',1);
INSERT INTO "migrations" VALUES (16,'2024_05_23_222600_create_customer_columns',1);
INSERT INTO "migrations" VALUES (17,'2024_05_23_222601_create_subscriptions_table',1);
INSERT INTO "migrations" VALUES (18,'2024_05_23_222602_create_subscription_items_table',1);
INSERT INTO "users" VALUES (1,'SIKROX MEMER',NULL,NULL,'simoarmymen9@gmail.com','ADMIN',NULL,'$2y$12$j6tC/dTvw7IWvWH0Ty60j.aO6Tx9oLT.tF45rS12AUpMGJIXu0zUK',NULL,'2024-05-25 18:37:10','2024-05-25 18:37:10','default',NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO "sessions" VALUES ('TXOkEZpP4jCsG2yUaWQaWkiUUEYVxgWChcemRYKD',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','YTo4OntzOjY6Il90b2tlbiI7czo0MDoiWm9lR2V0eU1lVFBtd1A0elFLREdwSWNZTzhKY2tsMGpzVVRQS0lnRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9ibG9ncy9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkajZ0Qy9kVHZ3N0lXdldIMFR5NjBqLmFPNlR4OW9MVC50RjQ1clMxMkFVcE1HSklYdTB6VUsiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fXM6NDoiY2FydCI7YToxOntpOjE7YTo5OntzOjQ6Im5hbWUiO3M6NjoiT3JhbmdlIjtzOjU6InByaWNlIjtkOjUwO3M6ODoicXVhbnRpdHkiO2k6MTtzOjExOiJkZXNjcmlwdGlvbiI7czoxMToiSGVsbG8gV29ybGQiO3M6MTA6ImF0dGFjaG1lbnQiO3M6MzA6IjAxSFlSTVpOQlEwQjdINko0MllFN1JTN1RBLmpwZyI7czoxMDoiZGltZW5zaW9ucyI7czo2OiIxMDI0Y20iO3M6NToiY29sb3IiO3M6NzoiIzAwMDAwMCI7czo4OiJkaXNjb3VudCI7aToyNTtzOjg6ImNhdGVnb3J5IjtzOjc6IlQtc2hpcnQiO319czo1OiJ0b3RhbCI7ZDozNy41O30=',1716669625);
INSERT INTO "sessions" VALUES ('xQgW2ywYVVksk7zMNEeTdouyFumP3mvTZ7aTzRCg',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWmJWdXJSVUtLanBMSnFYTVRVSlNCSWhVMGVhSmo5ZnVnWHI4aEpXcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1716718401);
INSERT INTO "cache" VALUES ('356a192b7913b04c54574d18c28d46e6395428ab:timer','i:1716669685;',1716669685);
INSERT INTO "cache" VALUES ('356a192b7913b04c54574d18c28d46e6395428ab','i:1;',1716669685);
INSERT INTO "activities" VALUES (1,'2024-05-25 20:26:43','2024-05-25 20:26:43','01HYRPYAPZ8JWN3VY9QBYPR4W6.jpg','How Good Is That D','<p><strong>Hello World</strong></p>','IT Space Merch Conference','2024-05-02');
INSERT INTO "activities" VALUES (2,'2024-05-25 20:35:22','2024-05-25 20:35:22','01HYRQE4X80C0ZV82AQZ81X3FV.jpg','Hello Work ','<p>YE ABOUT THAT AM ELON MUSK YOU SHOULD REPSECT MY ASS RIGHT NOW&nbsp;</p><p><br></p>','Elon Musk Conference','2024-04-29');
INSERT INTO "categories" VALUES (1,'2024-05-25 19:50:53','2024-05-25 19:50:53','T-shirt','<p><strong>Hello World</strong></p>',1);
INSERT INTO "products" VALUES (1,'Orange',50.0,1,'Hello World','01HYRMZNBQ0B7H6J42YE7RS7TA.jpg','1024cm','#000000',25,1,'2024-05-25 19:52:30','2024-05-25 19:52:30');
CREATE UNIQUE INDEX IF NOT EXISTS "users_name_unique" ON "users" (
	"name"
);
CREATE UNIQUE INDEX IF NOT EXISTS "users_email_unique" ON "users" (
	"email"
);
CREATE INDEX IF NOT EXISTS "sessions_user_id_index" ON "sessions" (
	"user_id"
);
CREATE INDEX IF NOT EXISTS "sessions_last_activity_index" ON "sessions" (
	"last_activity"
);
CREATE INDEX IF NOT EXISTS "jobs_queue_index" ON "jobs" (
	"queue"
);
CREATE UNIQUE INDEX IF NOT EXISTS "failed_jobs_uuid_unique" ON "failed_jobs" (
	"uuid"
);
CREATE INDEX IF NOT EXISTS "media_model_type_model_id_index" ON "media" (
	"model_type",
	"model_id"
);
CREATE UNIQUE INDEX IF NOT EXISTS "media_uuid_unique" ON "media" (
	"uuid"
);
CREATE INDEX IF NOT EXISTS "media_order_column_index" ON "media" (
	"order_column"
);
CREATE INDEX IF NOT EXISTS "breezy_sessions_authenticatable_type_authenticatable_id_index" ON "breezy_sessions" (
	"authenticatable_type",
	"authenticatable_id"
);
CREATE INDEX IF NOT EXISTS "order_product_order_id_product_id_index" ON "order_product" (
	"order_id",
	"product_id"
);
CREATE INDEX IF NOT EXISTS "users_stripe_id_index" ON "users" (
	"stripe_id"
);
CREATE INDEX IF NOT EXISTS "subscriptions_user_id_stripe_status_index" ON "subscriptions" (
	"user_id",
	"stripe_status"
);
CREATE UNIQUE INDEX IF NOT EXISTS "subscriptions_stripe_id_unique" ON "subscriptions" (
	"stripe_id"
);
CREATE INDEX IF NOT EXISTS "subscription_items_subscription_id_stripe_price_index" ON "subscription_items" (
	"subscription_id",
	"stripe_price"
);
CREATE UNIQUE INDEX IF NOT EXISTS "subscription_items_stripe_id_unique" ON "subscription_items" (
	"stripe_id"
);