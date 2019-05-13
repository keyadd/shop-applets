# shop-applets

```
.
├── application
│   ├── api
│   │   ├── behavior
│   │   │   └── CORS.php
│   │   ├── common.php
│   │   ├── config.php
│   │   ├── controller
│   │   │   ├── BaseController.php
│   │   │   └── v1
│   │   │       ├── Address.php
│   │   │       ├── Banner.php
│   │   │       ├── Category.php
│   │   │       ├── Miss.php
│   │   │       ├── Order.php
│   │   │       ├── Pay.php
│   │   │       ├── Product.php
│   │   │       ├── Sample.php
│   │   │       ├── Theme.php
│   │   │       └── Token.php
│   │   ├── model
│   │   │   ├── Auth.php
│   │   │   ├── BannerItem.php
│   │   │   ├── Banner.php
│   │   │   ├── BaseModel.php
│   │   │   ├── Category.php
│   │   │   ├── Image.php
│   │   │   ├── Order.php
│   │   │   ├── OrderProduct.php
│   │   │   ├── ProductImage.php
│   │   │   ├── Product.php
│   │   │   ├── ProductProperty.php
│   │   │   ├── Sample.php
│   │   │   ├── Theme.php
│   │   │   ├── ThirdApp.php
│   │   │   ├── UserAddress.php
│   │   │   └── User.php
│   │   ├── service
│   │   │   ├── AccessToken.php
│   │   │   ├── AppToken.php
│   │   │   ├── Banner.php
│   │   │   ├── DeliveryMessage.php
│   │   │   ├── Image.php
│   │   │   ├── Order.php
│   │   │   ├── Pay.php
│   │   │   ├── Sample.php
│   │   │   ├── Token.php
│   │   │   ├── UserToken.php
│   │   │   ├── WxMessage.php
│   │   │   └── WxNotify.php
│   │   └── validate
│   │       ├── AddressNew.php
│   │       ├── AppTokenGet.php
│   │       ├── BaseValidate.php
│   │       ├── Count.php
│   │       ├── IDCollection.php
│   │       ├── IDMustBePositiveInt.php
│   │       ├── IsValidUserToken.php
│   │       ├── OrderPlace.php
│   │       ├── PagingParameter.php
│   │       ├── PreOrder.php
│   │       ├── SampleGet.php
│   │       ├── ThemeProduct.php
│   │       └── TokenGet.php
│   ├── command.php
│   ├── common.php
│   ├── config.php
│   ├── database.php
│   ├── extra
│   │   └── wx.php
│   ├── lib
│   │   ├── enum
│   │   │   ├── OrderStatusEnum.php
│   │   │   └── ScopeEnum.php
│   │   └── exception
│   │       ├── BaseException.php
│   │       ├── CategoryException.php
│   │       ├── ExceptionHandler.php
│   │       ├── ForbiddenException.php
│   │       ├── MissException.php
│   │       ├── OrderException.php
│   │       ├── ParameterException.php
│   │       ├── ProductException.php
│   │       ├── SuccessMessage.php
│   │       ├── ThemeException.php
│   │       ├── TokenException.php
│   │       ├── UserException.php
│   │       └── WeChatException.php
│   ├── route.php
│   ├── tags.php
│   └── test
│       ├── common.php
│       ├── config.php
│       ├── controller
│       │   └── Index.php
│       └── model
│           ├── BannerImg.php
│           └── Category.php
├── build.php
├── composer.json
├── error.code.md
├── extend
│   ├── Firebase
│   │   └── JWT
│   │       ├── BeforeValidException.php
│   │       ├── ExpiredException.php
│   │       ├── JWT.php
│   │       └── SignatureInvalidException.php
│   ├── ItsDangerous
│   │   ├── BadData
│   │   │   ├── BadData.php
│   │   │   ├── BadPayload.php
│   │   │   ├── BadSignature.php
│   │   │   ├── BadTimeSignature.php
│   │   │   └── SignatureExpired.php
│   │   ├── Signer
│   │   │   ├── HMACAlgorithm.php
│   │   │   ├── NoneAlgorithm.php
│   │   │   ├── Serializer.php
│   │   │   ├── Signer.php
│   │   │   ├── SigningAlgorithm.php
│   │   │   ├── SimpleJsonSerializer.php
│   │   │   ├── TimedSerializer.php
│   │   │   └── TimestampSigner.php
│   │   └── Support
│   │       └── ClockProvider.php
│   └── WxPay
│       ├── WxPay.Api.php
│       ├── WxPay.Config.php
│       ├── WxPay.Data.php
│       ├── WxPay.Exception.php
│       └── WxPay.Notify.php
├── LICENSE.txt
├── public
│   ├── city_v1.json
│   ├── favicon.ico
│   ├── images
│   │   ├── 1@theme-head.png
│   │   ├── 1@theme.png
│   │   ├── 2@theme-head.png
│   │   ├── 2@theme.png
│   │   ├── 3@theme.png
│   │   ├── banner-1a.png
│   │   ├── banner-2a.png
│   │   ├── banner-3a.png
│   │   ├── banner-4a.png
│   │   ├── category-cake.png
│   │   ├── category-dryfruit.png
│   │   ├── category-fry-a.png
│   │   ├── category-rice.png
│   │   ├── category-tea.png
│   │   ├── category-vg.png
│   │   ├── detail-10@1-dryfruit.png
│   │   ├── detail-11@1-dryfruit.png
│   │   ├── detail-1@1-dryfruit.png
│   │   ├── detail-12@1-dryfruit.png
│   │   ├── detail-13@1-dryfruit.png
│   │   ├── detail-2@1-dryfruit.png
│   │   ├── detail-3@1-dryfruit.png
│   │   ├── detail-4@1-dryfruit.png
│   │   ├── detail-5@1-dryfruit.png
│   │   ├── detail-6@1-dryfruit.png
│   │   ├── detail-7@1-dryfruit.png
│   │   ├── detail-8@1-dryfruit.png
│   │   ├── detail-9@1-dryfruit.png
│   │   ├── product-cake@1.png
│   │   ├── product-cake@2.png
│   │   ├── product-cake-a@3.png
│   │   ├── product-cake-a@4.png
│   │   ├── product-dryfruit@1.png
│   │   ├── product-dryfruit@2.png
│   │   ├── product-dryfruit@3.png
│   │   ├── product-dryfruit@4.png
│   │   ├── product-dryfruit@5.png
│   │   ├── product-dryfruit@7.png
│   │   ├── product-dryfruit@8.png
│   │   ├── product-dryfruit-a@6.png
│   │   ├── product-fry@1.png
│   │   ├── product-fry@2.png
│   │   ├── product-fry@3.png
│   │   ├── product-fry@4.png
│   │   ├── product-fry@5.png
│   │   ├── product-rice@1.png
│   │   ├── product-rice@2.png
│   │   ├── product-rice@3.png
│   │   ├── product-rice@4.png
│   │   ├── product-rice@5.png
│   │   ├── product-rice@6.png
│   │   ├── product-rice@7.png
│   │   ├── product-tea@1.png
│   │   ├── product-tea@2.png
│   │   ├── product-tea@3.png
│   │   ├── product-vg@1.png
│   │   ├── product-vg@2.png
│   │   ├── product-vg@3.png
│   │   ├── product-vg@4.png
│   │   └── product-vg@5.png
│   ├── index.php
│   ├── robots.txt
│   ├── router.php
│   ├── static
│   └── tsconfig.json
├── README.md
├── README.mdgit
├── runtime
├── think
├── thinkphp
│   ├── base.php
│   ├── codecov.yml
│   ├── composer.json
│   ├── console.php
│   ├── CONTRIBUTING.md
│   ├── convention.php
│   ├── helper.php
│   ├── lang
│   │   └── zh-cn.php
│   ├── library
│   │   ├── think
│   │   │   ├── App.php
│   │   │   ├── Build.php
│   │   │   ├── cache
│   │   │   │   ├── driver
│   │   │   │   │   ├── File.php
│   │   │   │   │   ├── Lite.php
│   │   │   │   │   ├── Memcached.php
│   │   │   │   │   ├── Memcache.php
│   │   │   │   │   ├── Redis.php
│   │   │   │   │   ├── Sqlite.php
│   │   │   │   │   ├── Wincache.php
│   │   │   │   │   └── Xcache.php
│   │   │   │   └── Driver.php
│   │   │   ├── Cache.php
│   │   │   ├── Collection.php
│   │   │   ├── config
│   │   │   │   └── driver
│   │   │   │       ├── Ini.php
│   │   │   │       ├── Json.php
│   │   │   │       └── Xml.php
│   │   │   ├── Config.php
│   │   │   ├── console
│   │   │   │   ├── bin
│   │   │   │   │   ├── hiddeninput.exe
│   │   │   │   │   └── README.md
│   │   │   │   ├── command
│   │   │   │   │   ├── Build.php
│   │   │   │   │   ├── Clear.php
│   │   │   │   │   ├── Help.php
│   │   │   │   │   ├── Lists.php
│   │   │   │   │   ├── make
│   │   │   │   │   │   ├── Controller.php
│   │   │   │   │   │   ├── Model.php
│   │   │   │   │   │   └── stubs
│   │   │   │   │   │       ├── controller.plain.stub
│   │   │   │   │   │       ├── controller.stub
│   │   │   │   │   │       └── model.stub
│   │   │   │   │   ├── Make.php
│   │   │   │   │   └── optimize
│   │   │   │   │       ├── Autoload.php
│   │   │   │   │       ├── Config.php
│   │   │   │   │       ├── Route.php
│   │   │   │   │       └── Schema.php
│   │   │   │   ├── Command.php
│   │   │   │   ├── input
│   │   │   │   │   ├── Argument.php
│   │   │   │   │   ├── Definition.php
│   │   │   │   │   └── Option.php
│   │   │   │   ├── Input.php
│   │   │   │   ├── LICENSE
│   │   │   │   ├── output
│   │   │   │   │   ├── Ask.php
│   │   │   │   │   ├── descriptor
│   │   │   │   │   │   └── Console.php
│   │   │   │   │   ├── Descriptor.php
│   │   │   │   │   ├── driver
│   │   │   │   │   │   ├── Buffer.php
│   │   │   │   │   │   ├── Console.php
│   │   │   │   │   │   └── Nothing.php
│   │   │   │   │   ├── formatter
│   │   │   │   │   │   ├── Stack.php
│   │   │   │   │   │   └── Style.php
│   │   │   │   │   ├── Formatter.php
│   │   │   │   │   ├── question
│   │   │   │   │   │   ├── Choice.php
│   │   │   │   │   │   └── Confirmation.php
│   │   │   │   │   └── Question.php
│   │   │   │   └── Output.php
│   │   │   ├── Console.php
│   │   │   ├── controller
│   │   │   │   ├── Rest.php
│   │   │   │   └── Yar.php
│   │   │   ├── Controller.php
│   │   │   ├── Cookie.php
│   │   │   ├── db
│   │   │   │   ├── builder
│   │   │   │   │   ├── Mysql.php
│   │   │   │   │   ├── Pgsql.php
│   │   │   │   │   ├── Sqlite.php
│   │   │   │   │   └── Sqlsrv.php
│   │   │   │   ├── Builder.php
│   │   │   │   ├── Connection.php
│   │   │   │   ├── connector
│   │   │   │   │   ├── Mysql.php
│   │   │   │   │   ├── Pgsql.php
│   │   │   │   │   ├── pgsql.sql
│   │   │   │   │   ├── Sqlite.php
│   │   │   │   │   └── Sqlsrv.php
│   │   │   │   ├── exception
│   │   │   │   │   ├── BindParamException.php
│   │   │   │   │   ├── DataNotFoundException.php
│   │   │   │   │   └── ModelNotFoundException.php
│   │   │   │   └── Query.php
│   │   │   ├── Db.php
│   │   │   ├── debug
│   │   │   │   ├── Console.php
│   │   │   │   └── Html.php
│   │   │   ├── Debug.php
│   │   │   ├── Env.php
│   │   │   ├── Error.php
│   │   │   ├── exception
│   │   │   │   ├── ClassNotFoundException.php
│   │   │   │   ├── DbException.php
│   │   │   │   ├── ErrorException.php
│   │   │   │   ├── Handle.php
│   │   │   │   ├── HttpException.php
│   │   │   │   ├── HttpResponseException.php
│   │   │   │   ├── PDOException.php
│   │   │   │   ├── RouteNotFoundException.php
│   │   │   │   ├── TemplateNotFoundException.php
│   │   │   │   ├── ThrowableError.php
│   │   │   │   └── ValidateException.php
│   │   │   ├── Exception.php
│   │   │   ├── File.php
│   │   │   ├── Hook.php
│   │   │   ├── Lang.php
│   │   │   ├── Loader.php
│   │   │   ├── log
│   │   │   │   └── driver
│   │   │   │       ├── File.php
│   │   │   │       ├── Socket.php
│   │   │   │       └── Test.php
│   │   │   ├── Log.php
│   │   │   ├── model
│   │   │   │   ├── Collection.php
│   │   │   │   ├── Merge.php
│   │   │   │   ├── Pivot.php
│   │   │   │   ├── relation
│   │   │   │   │   ├── BelongsToMany.php
│   │   │   │   │   ├── BelongsTo.php
│   │   │   │   │   ├── HasMany.php
│   │   │   │   │   ├── HasManyThrough.php
│   │   │   │   │   ├── HasOne.php
│   │   │   │   │   ├── MorphMany.php
│   │   │   │   │   ├── MorphTo.php
│   │   │   │   │   └── OneToOne.php
│   │   │   │   └── Relation.php
│   │   │   ├── Model.php
│   │   │   ├── paginator
│   │   │   │   └── driver
│   │   │   │       └── Bootstrap.php
│   │   │   ├── Paginator.php
│   │   │   ├── process
│   │   │   │   ├── Builder.php
│   │   │   │   ├── exception
│   │   │   │   │   ├── Failed.php
│   │   │   │   │   └── Timeout.php
│   │   │   │   ├── pipes
│   │   │   │   │   ├── Pipes.php
│   │   │   │   │   ├── Unix.php
│   │   │   │   │   └── Windows.php
│   │   │   │   └── Utils.php
│   │   │   ├── Process.php
│   │   │   ├── Request.php
│   │   │   ├── response
│   │   │   │   ├── Json.php
│   │   │   │   ├── Jsonp.php
│   │   │   │   ├── Redirect.php
│   │   │   │   ├── View.php
│   │   │   │   └── Xml.php
│   │   │   ├── Response.php
│   │   │   ├── Route.php
│   │   │   ├── session
│   │   │   │   └── driver
│   │   │   │       ├── Memcached.php
│   │   │   │       ├── Memcache.php
│   │   │   │       └── Redis.php
│   │   │   ├── Session.php
│   │   │   ├── template
│   │   │   │   ├── driver
│   │   │   │   │   └── File.php
│   │   │   │   ├── taglib
│   │   │   │   │   └── Cx.php
│   │   │   │   └── TagLib.php
│   │   │   ├── Template.php
│   │   │   ├── Url.php
│   │   │   ├── Validate.php
│   │   │   ├── view
│   │   │   │   └── driver
│   │   │   │       ├── Php.php
│   │   │   │       └── Think.php
│   │   │   └── View.php
│   │   └── traits
│   │       ├── controller
│   │       │   └── Jump.php
│   │       ├── model
│   │       │   └── SoftDelete.php
│   │       └── think
│   │           └── Instance.php
│   ├── LICENSE.txt
│   ├── logo.png
│   ├── phpunit.xml
│   ├── README.md
│   ├── start.php
│   └── tpl
│       ├── default_index.tpl
│       ├── dispatch_jump.tpl
│       ├── page_trace.tpl
│       └── think_exception.tpl
└── vendor

```
