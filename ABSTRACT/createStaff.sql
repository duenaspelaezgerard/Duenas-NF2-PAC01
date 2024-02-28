CREATE TABLE staff (
    "id" SERIAL PRIMARY KEY NOT NULL,
    "first_name" character varying(64),
    "last_name" character varying(128),
    "address_id" smallint NOT NULL,
    "email" character varying(50),
    "store_id" smallint NOT NULL,
    "active" boolean DEFAULT true NOT NULL,
    "username" character varying(16) NOT NULL,
    "password" character varying(40),
    "last_update" timestamp without time zone DEFAULT now() NOT NULL,
    "picture" character varying(40)
);