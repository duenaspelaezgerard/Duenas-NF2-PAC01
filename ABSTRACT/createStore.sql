CREATE TABLE store (
    "id" SERIAL PRIMARY KEY NOT NULL,
    "manager_staff_id" smallint NOT NULL,
    "address_id" smallint NOT NULL,
    "last_update" timestamp without time zone DEFAULT now() NOT NULL
);