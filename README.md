# CPA Campaign Schema (Laravel)

Проект на Laravel 12, реализующий структуру базы данных для CPA-кампаний: клики, источники трафика, конверсии и офферы.  
Проект полностью готов к расширению, аналитике и интеграции в микросервисную архитектуру.

## 📦 Что реализовано

- Миграции (`php artisan migrate`) для:
    - offers (офферы и выплаты)
    - sources (источники трафика)
    - clicks (клики с IP, user-agent)
    - conversions (конверсии с доходом и статусом)
- Eloquent-связи (`hasMany`, `belongsTo`, `hasOne`)
- Сидеры (`php artisan db:seed`) с тестовыми данными
- Поддержка аналитики: индексы по `status`, `created_at`, `offer_id`, `source_id`, `click_id`
- Полностью соответствует PSR-12 и Laravel-стандартам

## 🗃️ Структура таблиц

### Offers

| Поле      | Тип         | Комментарий           |
|-----------|--------------|------------------------|
| id        | BIGINT       | Первичный ключ         |
| name      | VARCHAR      | Название оффера        |
| payout    | DECIMAL(10,2)| Выплата за конверсию   |

---

### Sources

| Поле    | Тип     | Комментарий         |
|---------|----------|----------------------|
| id      | BIGINT   | Первичный ключ       |
| name    | VARCHAR  | Название источника   |

---

### Clicks

| Поле       | Тип        | Комментарий                    |
|------------|-------------|-------------------------------|
| id         | BIGINT      | PK                            |
| click_id   | VARCHAR(64) | Внешний click ID              |
| offer_id   | FK → offers | Оффер                         |
| source_id  | FK → sources| Источник                      |
| ip         | VARCHAR     | IP-адрес                      |
| user_agent | TEXT        | User-Agent                    |

---

### Conversions

| Поле     | Тип                      | Комментарий                     |
|----------|---------------------------|----------------------------------|
| id       | BIGINT                    | PK                              |
| click_id | FK → clicks.click_id      | Привязка к клику                |
| status   | ENUM(pending/approved/...)| Статус конверсии                |
| revenue  | DECIMAL(10,2)             | Доход                           |

---

## 🧪 Тестовые данные

```bash
php artisan migrate:fresh --seed
