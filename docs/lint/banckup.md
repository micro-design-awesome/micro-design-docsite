[原文参考: 阿里巴巴Java开发手册（泰山版）](https://github.com/alibaba/p3c)

注：本规范结合Spring Boot开发实践和微服务架构特点进行了调整

# 后端开发规范

## <a name='naming'>命名规范</a>

### 包命名
- 包名统一使用小写，点分隔符之间有且仅有一个自然语义的英语单词
- 包名统一使用单数形式，但是类名如果有复数含义，类名可以使用复数形式

```java
// bad
com.xunzhaotech.UserManagement
com.xunzhaotech.xmlServices

// good
com.xunzhaotech.user.management
com.xunzhaotech.xml.service
```

### 类命名
- 类名使用 UpperCamelCase 风格，必须遵从驼峰形式

```java
// bad
class usercontroller {}
class user_controller {}

// good
class UserController {}
class UserServiceImpl {}
```

- 特殊类型命名规范
  - **Controller**: `XxxController`
  - **Service**: `XxxService` / `XxxServiceImpl`
  - **DAO/Mapper**: `XxxMapper` / `XxxDAO`
  - **DTO**: `XxxDTO`
  - **VO**: `XxxVO`
  - **Entity/DO**: `XxxDO` / `Xxx`
  - **Exception**: `XxxException`
  - **Test**: `XxxTest`

### 方法命名
- 方法名使用 lowerCamelCase 风格，必须遵从驼峰形式

```java
// bad
public void DeleteUser() {}
public void delete_user() {}

// good
public void deleteUser() {}
public void getUserById(Long id) {}
```

- Service/DAO 层方法命名规约
  - 获取单个对象：`get` + `Xxx`
  - 获取多个对象：`list` + `Xxx`
  - 获取统计值：`count` + `Xxx`
  - 插入：`save`/`insert`
  - 删除：`delete`/`remove`
  - 修改：`update`

```java
// Service 接口示例
public interface UserService {
    UserVO getUserById(Long id);
    List<UserVO> listUsersByDeptId(Long deptId);
    Integer countUsersByStatus(Integer status);
    Long saveUser(UserSaveReqVO reqVO);
    Boolean updateUser(UserUpdateReqVO reqVO);
    Boolean deleteUser(Long id);
}
```

### 常量命名
- 常量命名全部大写，单词间用下划线隔开

```java
// bad
public static final String defaultName = "admin";
public static final int maxcount = 100;

// good
public static final String DEFAULT_NAME = "admin";
public static final int MAX_COUNT = 100;
```

### 变量命名
- 变量命名使用 lowerCamelCase 风格

```java
// bad
String UserName;
int MaxCount;

// good
String userName;
int maxCount;
```

- Boolean 类型变量命名

```java
// bad
Boolean isDelete;
Boolean notFound;

// good
Boolean deleted;
Boolean found;
Boolean success;
Boolean enabled;
```

**[[⬆]](#TOC)**

## <a name='constant'>常量定义</a>

- 不允许任何魔法值（即未经预先定义的常量）直接出现在代码中

```java
// bad
if (status == 1) {
    // ...
}

// good
public static final Integer ENABLED_STATUS = 1;

if (status.equals(ENABLED_STATUS)) {
    // ...
}
```

- 常量类命名

```java
// 通用常量类
public class CommonConstants {
    public static final String DATE_FORMAT = "yyyy-MM-dd";
    public static final String DATETIME_FORMAT = "yyyy-MM-dd HH:mm:ss";
}

// 业务常量使用枚举
public enum UserStatusEnum {
    ENABLED(1, "启用"),
    DISABLED(0, "禁用");
    
    private final Integer code;
    private final String desc;
}
```

**[[⬆]](#TOC)**

## <a name='code-format'>代码格式</a>

### 缩进
- 使用 4 个空格进行缩进，禁止使用 Tab

```java
// bad
public void method() {
∙∙if (condition) {
∙∙∙∙∙∙doSomething();
∙∙}
}

// good
public void method() {
∙∙∙∙if (condition) {
∙∙∙∙∙∙∙∙doSomething();
∙∙∙∙}
}
```

### 大括号
- 大括号的使用约定：左大括号前不换行，左大括号后换行

```java
// bad
if (condition)
{
    // ...
}

// good
if (condition) {
    // ...
}
```

- 即使只有一行代码，也要使用大括号

```java
// bad
if (condition) return false;

// good
if (condition) {
    return false;
}
```

### 行长度
- 单行字符数限制不超过 120 个，超出需要换行

```java
// bad
String sql = "SELECT id, name, age, email, phone, address, create_time, update_time FROM user WHERE status = 1";

// good
String sql = "SELECT id, name, age, email, phone, address, " +
            "create_time, update_time " +
            "FROM user " +
            "WHERE status = 1";
```

**[[⬆]](#TOC)**

## <a name='oop'>面向对象</a>

### 类设计
- 类的设计必须遵循单一职责原则

```java
// bad - 一个类承担了太多职责
public class UserService {
    public void createUser() {}
    public void sendEmail() {}
    public void generateReport() {}
}

// good - 职责分离
public class UserService {
    public void createUser() {}
}

public class EmailService {
    public void sendEmail() {}
}

public class ReportService {
    public void generateReport() {}
}
```

### 方法设计
- 方法参数不宜过多，建议不超过 5 个

```java
// bad
public void createUser(String name, Integer age, String email, 
                      String phone, String address, Date birthDate) {
    // ...
}

// good
public void createUser(UserCreateDTO userDTO) {
    // ...
}
```

### 接口设计
- 接口方法必须加 Javadoc 注释

```java
public interface UserService {
    /**
     * 根据用户ID获取用户信息
     *
     * @param id 用户ID
     * @return 用户信息
     */
    UserVO getUserById(Long id);
}
```

**[[⬆]](#TOC)**

## <a name='exception'>异常处理</a>

### 异常捕获
- 不要捕获 Exception 或 Throwable

```java
// bad
try {
    // ...
} catch (Exception e) {
    log.error("error", e);
}

// good
try {
    // ...
} catch (IOException e) {
    log.error("IO error", e);
} catch (SQLException e) {
    log.error("Database error", e);
}
```

### 异常处理
- 捕获异常后必须有处理逻辑，不能忽略

```java
// bad
try {
    // ...
} catch (IOException e) {
    // 忽略异常
}

// good
try {
    // ...
} catch (IOException e) {
    log.error("IO操作失败", e);
    throw new ServiceException("文件处理失败");
}
```

### 自定义异常
- 业务异常使用自定义异常

```java
// 基础业务异常
public class ServiceException extends RuntimeException {
    private Integer code;
    private String message;
    
    public ServiceException(Integer code, String message) {
        super(message);
        this.code = code;
        this.message = message;
    }
}

// 使用示例
if (user == null) {
    throw new ServiceException(ErrorCode.USER_NOT_FOUND, "用户不存在");
}
```

**[[⬆]](#TOC)**

## <a name='log'>日志规范</a>

### 日志级别
- 正确使用日志级别

```java
// ERROR - 错误信息
log.error("用户登录失败，用户名：{}", username, e);

// WARN - 警告信息
log.warn("用户尝试访问未授权资源：{}", resource);

// INFO - 重要的业务处理信息
log.info("用户登录成功，用户ID：{}", userId);

// DEBUG - 调试信息
log.debug("SQL查询参数：{}", params);
```

### 日志内容
- 日志必须包含关键信息

```java
// bad
log.error("保存失败");

// good
log.error("保存用户失败，用户名：{}，错误原因：{}", username, e.getMessage(), e);
```

### 占位符使用
- 使用占位符而不是字符串拼接

```java
// bad
log.info("用户" + userId + "登录成功");

// good
log.info("用户{}登录成功", userId);
```

**[[⬆]](#TOC)**

## <a name='comment'>注释规范</a>

### 类注释
- 所有的类都必须添加创建者和创建日期

```java
/**
 * 用户服务实现类
 *
 * @author xunzhaotech
 * @date 2024-08-25
 */
@Service
public class UserServiceImpl implements UserService {
    // ...
}
```

### 方法注释
- Service 层的公共方法必须有注释

```java
/**
 * 根据部门ID获取用户列表
 *
 * @param deptId 部门ID
 * @param pageParam 分页参数
 * @return 用户列表
 */
public PageResult<UserVO> listUsersByDeptId(Long deptId, PageParam pageParam) {
    // ...
}
```

### 代码注释
- 注释要简洁明了，代码修改时同步修改注释

```java
// bad
// 获取用户信息
UserVO user = userService.getUserById(id);

// good
// 校验用户是否有权限访问该资源
if (!hasPermission(userId, resourceId)) {
    throw new ServiceException("无权限访问");
}
```

**[[⬆]](#TOC)**

## <a name='database'>数据库规范</a>

### 表设计
- 表名、字段名必须使用小写字母或数字，禁止使用复数

```sql
-- bad
CREATE TABLE Users (
    ID INT,
    UserName VARCHAR(50)
);

-- good
CREATE TABLE user (
    id BIGINT,
    user_name VARCHAR(50)
);
```

### 索引规范
- 业务上具有唯一特性的字段，必须建成唯一索引

```sql
-- 唯一索引
ALTER TABLE user ADD UNIQUE INDEX uk_email (email);

-- 普通索引命名：idx_字段名
ALTER TABLE user ADD INDEX idx_create_time (create_time);
```

### SQL 规范
- 不要使用 SELECT *

```java
// bad
@Select("SELECT * FROM user WHERE id = #{id}")
User selectById(Long id);

// good
@Select("SELECT id, username, email, status FROM user WHERE id = #{id}")
User selectById(Long id);
```

- 使用预编译语句防止 SQL 注入

```java
// bad
String sql = "SELECT * FROM user WHERE name = '" + name + "'";

// good - MyBatis
@Select("SELECT * FROM user WHERE name = #{name}")
User selectByName(@Param("name") String name);
```

**[[⬆]](#TOC)**

## <a name='api'>API 设计规范</a>

### RESTful 规范
- 使用标准的 HTTP 方法

```java
@RestController
@RequestMapping("/users")
public class UserController {
    
    @GetMapping("/{id}")          // 获取资源
    public UserVO getUser(@PathVariable Long id) {}
    
    @PostMapping                  // 创建资源
    public Long createUser(@RequestBody UserCreateDTO dto) {}
    
    @PutMapping("/{id}")          // 更新资源
    public Boolean updateUser(@PathVariable Long id, @RequestBody UserUpdateDTO dto) {}
    
    @DeleteMapping("/{id}")       // 删除资源
    public Boolean deleteUser(@PathVariable Long id) {}
}
```

### 统一响应格式

```java
@Data
public class CommonResult<T> {
    private Integer code;
    private String message;
    private T data;
    
    public static <T> CommonResult<T> success(T data) {
        CommonResult<T> result = new CommonResult<>();
        result.setCode(200);
        result.setMessage("success");
        result.setData(data);
        return result;
    }
    
    public static <T> CommonResult<T> error(Integer code, String message) {
        CommonResult<T> result = new CommonResult<>();
        result.setCode(code);
        result.setMessage(message);
        return result;
    }
}
```

### 参数校验
- 使用 JSR-303 进行参数校验

```java
@Data
public class UserCreateDTO {
    @NotBlank(message = "用户名不能为空")
    @Size(min = 4, max = 20, message = "用户名长度必须在4-20之间")
    private String username;
    
    @NotNull(message = "邮箱不能为空")
    @Email(message = "邮箱格式不正确")
    private String email;
    
    @NotNull(message = "年龄不能为空")
    @Min(value = 0, message = "年龄不能小于0")
    @Max(value = 150, message = "年龄不能大于150")
    private Integer age;
}

// Controller 使用
@PostMapping
public CommonResult<Long> createUser(@Valid @RequestBody UserCreateDTO dto) {
    return CommonResult.success(userService.createUser(dto));
}
```

**[[⬆]](#TOC)**

## <a name='security'>安全规范</a>

### 用户认证
- 使用 Token 进行身份认证

```java
@Component
public class JwtAuthenticationFilter extends OncePerRequestFilter {
    
    @Override
    protected void doFilterInternal(HttpServletRequest request, 
                                  HttpServletResponse response, 
                                  FilterChain chain) {
        String token = request.getHeader("Authorization");
        if (StringUtils.hasText(token)) {
            // 验证 token
            Claims claims = jwtUtil.parseToken(token);
            // 设置认证信息
            SecurityContextHolder.getContext().setAuthentication(authentication);
        }
        chain.doFilter(request, response);
    }
}
```

### 敏感信息处理
- 敏感信息必须加密存储

```java
// bad
user.setPassword(password);

// good
user.setPassword(passwordEncoder.encode(password));
```

- 日志中不能打印敏感信息

```java
// bad
log.info("用户登录，密码：{}", password);

// good
log.info("用户登录，用户名：{}", username);
```

### 权限控制
- 使用注解进行权限控制

```java
@RestController
@RequestMapping("/admin")
public class AdminController {
    
    @PreAuthorize("hasRole('ADMIN')")
    @GetMapping("/users")
    public List<UserVO> listUsers() {
        // 只有管理员可以访问
    }
    
    @PreAuthorize("hasPermission('user:update')")
    @PutMapping("/users/{id}")
    public Boolean updateUser(@PathVariable Long id) {
        // 需要用户更新权限
    }
}
```

**[[⬆]](#TOC)**

## <a name='transaction'>事务规范</a>

### 事务注解使用
- 正确使用 @Transactional 注解

```java
@Service
public class UserServiceImpl implements UserService {
    
    // bad - 事务范围过大
    @Transactional
    public void processUser() {
        // 查询操作
        User user = userMapper.selectById(id);
        // 外部调用
        emailService.sendEmail(user.getEmail());
        // 更新操作
        userMapper.updateById(user);
    }
    
    // good - 合理的事务范围
    @Transactional(rollbackFor = Exception.class)
    public void updateUser(UserUpdateDTO dto) {
        User user = userMapper.selectById(dto.getId());
        user.setName(dto.getName());
        userMapper.updateById(user);
    }
}
```

### 事务传播
- 根据业务需求选择合适的事务传播级别

```java
@Service
public class OrderService {
    
    @Transactional(propagation = Propagation.REQUIRED)
    public void createOrder(OrderDTO dto) {
        // 需要事务
    }
    
    @Transactional(propagation = Propagation.REQUIRES_NEW)
    public void recordLog(LogDTO dto) {
        // 独立事务，不受外部事务影响
    }
    
    @Transactional(propagation = Propagation.NOT_SUPPORTED)
    public OrderVO getOrder(Long id) {
        // 查询操作，不需要事务
    }
}
```

**[[⬆]](#TOC)**

## <a name='cache'>缓存规范</a>

### 缓存 Key 设计
- 使用有意义的缓存 Key

```java
public class CacheKey {
    // 用户信息缓存 Key
    public static final String USER_INFO = "user:info:";
    // 部门列表缓存 Key
    public static final String DEPT_LIST = "dept:list";
    
    public static String getUserKey(Long userId) {
        return USER_INFO + userId;
    }
}
```

### 缓存使用
- 合理使用 Spring Cache 注解

```java
@Service
public class UserServiceImpl implements UserService {
    
    @Cacheable(value = "user", key = "#id")
    public UserVO getUserById(Long id) {
        return userMapper.selectById(id);
    }
    
    @CacheEvict(value = "user", key = "#dto.id")
    public Boolean updateUser(UserUpdateDTO dto) {
        return userMapper.updateById(dto) > 0;
    }
    
    @CacheEvict(value = "user", allEntries = true)
    public void clearUserCache() {
        // 清除所有用户缓存
    }
}
```

### 缓存穿透、击穿、雪崩
- 防止缓存穿透

```java
@Service
public class UserServiceImpl {
    
    @Autowired
    private RedisTemplate<String, Object> redisTemplate;
    
    public UserVO getUserById(Long id) {
        String key = CacheKey.getUserKey(id);
        
        // 布隆过滤器判断
        if (!bloomFilter.contains(id)) {
            return null;
        }
        
        // 查询缓存
        UserVO user = (UserVO) redisTemplate.opsForValue().get(key);
        if (user != null) {
            return user;
        }
        
        // 加锁防止缓存击穿
        String lockKey = key + ":lock";
        Boolean lock = redisTemplate.opsForValue().setIfAbsent(lockKey, "1", 
                                                               10, TimeUnit.SECONDS);
        if (lock) {
            try {
                user = userMapper.selectById(id);
                if (user != null) {
                    // 设置随机过期时间防止缓存雪崩
                    int randomTime = 3600 + new Random().nextInt(600);
                    redisTemplate.opsForValue().set(key, user, randomTime, TimeUnit.SECONDS);
                }
            } finally {
                redisTemplate.delete(lockKey);
            }
        }
        
        return user;
    }
}
```

**[[⬆]](#TOC)**

## <a name='test'>单元测试</a>

### 测试类命名
- 测试类命名以 Test 结尾

```java
// Service 测试类
public class UserServiceTest {
    // ...
}

// Controller 测试类
public class UserControllerTest {
    // ...
}
```

### 测试方法命名
- 测试方法命名要表达测试的内容

```java
public class UserServiceTest {
    
    @Test
    public void testGetUserById_Success() {
        // 测试正常获取用户
    }
    
    @Test
    public void testGetUserById_UserNotFound() {
        // 测试用户不存在的情况
    }
    
    @Test
    public void testCreateUser_DuplicateUsername() {
        // 测试用户名重复的情况
    }
}
```

### Mock 使用
- 使用 Mockito 进行 Mock 测试

```java
@SpringBootTest
public class UserServiceTest {
    
    @MockBean
    private UserMapper userMapper;
    
    @Autowired
    private UserService userService;
    
    @Test
    public void testGetUserById() {
        // Given
        Long userId = 1L;
        User user = new User();
        user.setId(userId);
        user.setUsername("test");
        
        Mockito.when(userMapper.selectById(userId)).thenReturn(user);
        
        // When
        UserVO result = userService.getUserById(userId);
        
        // Then
        Assertions.assertNotNull(result);
        Assertions.assertEquals("test", result.getUsername());
    }
}
```

**[[⬆]](#TOC)**

## <a name='performance'>性能优化</a>

### 数据库优化
- 批量操作优化

```java
// bad - 循环单条插入
for (User user : userList) {
    userMapper.insert(user);
}

// good - 批量插入
userMapper.insertBatch(userList);
```

- 分页查询优化

```java
// 使用 MyBatis-Plus 分页
public PageResult<UserVO> listUsers(PageParam pageParam) {
    Page<User> page = new Page<>(pageParam.getPageNum(), pageParam.getPageSize());
    Page<User> userPage = userMapper.selectPage(page, queryWrapper);
    
    return new PageResult<>(userPage.getRecords(), userPage.getTotal());
}
```

### 接口优化
- 使用异步处理提升响应速度

```java
@Service
public class UserService {
    
    @Async
    public CompletableFuture<Boolean> sendNotification(Long userId) {
        // 异步发送通知
        emailService.sendEmail(userId);
        smsService.sendSms(userId);
        return CompletableFuture.completedFuture(true);
    }
}
```

### 缓存优化
- 合理使用本地缓存

```java
@Component
public class LocalCacheManager {
    
    // 使用 Caffeine 作为本地缓存
    private final Cache<String, Object> cache = Caffeine.newBuilder()
            .maximumSize(10000)
            .expireAfterWrite(5, TimeUnit.MINUTES)
            .build();
    
    public Object get(String key) {
        return cache.getIfPresent(key);
    }
    
    public void put(String key, Object value) {
        cache.put(key, value);
    }
}
```

**[[⬆]](#TOC)**

## <a name='microservice'>微服务规范</a>

### 服务拆分原则
- 按业务领域拆分服务

```yaml
# 服务划分示例
micro-module-system:  # 系统服务
  - 用户管理
  - 角色权限
  - 菜单管理

micro-module-order:   # 订单服务
  - 订单管理
  - 支付管理
  - 物流管理

micro-module-product: # 商品服务
  - 商品管理
  - 库存管理
  - 分类管理
```

### 服务调用
- 使用 Feign 进行服务调用

```java
@FeignClient(name = "micro-module-user", fallback = UserClientFallback.class)
public interface UserClient {
    
    @GetMapping("/users/{id}")
    CommonResult<UserVO> getUserById(@PathVariable("id") Long id);
}

// 降级处理
@Component
public class UserClientFallback implements UserClient {
    
    @Override
    public CommonResult<UserVO> getUserById(Long id) {
        return CommonResult.error(500, "用户服务不可用");
    }
}
```

### 分布式事务
- 使用 Seata 处理分布式事务

```java
@Service
public class OrderService {
    
    @GlobalTransactional(rollbackFor = Exception.class)
    public void createOrder(OrderDTO dto) {
        // 1. 创建订单
        orderMapper.insert(order);
        
        // 2. 扣减库存（调用商品服务）
        productClient.deductStock(dto.getProductId(), dto.getQuantity());
        
        // 3. 扣减余额（调用用户服务）
        userClient.deductBalance(dto.getUserId(), dto.getAmount());
    }
}
```

**[[⬆]](#TOC)**

## <a name='tools'>开发工具</a>

### IDE 配置
- **IDEA 必装插件**
  - Lombok Plugin
  - MyBatis Plugin
  - Alibaba Java Coding Guidelines
  - SonarLint
  - Rainbow Brackets

### 代码质量工具
- **CheckStyle**: 代码风格检查
- **SpotBugs**: Bug 检查
- **SonarQube**: 代码质量管理平台

### 版本管理
- **Git 提交规范**

```bash
# 提交格式
<type>(<scope>): <subject>

# 示例
feat(user): 添加用户导入功能
fix(order): 修复订单金额计算错误
docs(readme): 更新部署文档
refactor(payment): 重构支付模块
```

**[[⬆]](#TOC)**

## <a name='resources'>资源</a>

### 官方文档
- [Spring Boot 官方文档](https://spring.io/projects/spring-boot)
- [MyBatis-Plus 官方文档](https://baomidou.com/)
- [Spring Cloud Alibaba](https://github.com/alibaba/spring-cloud-alibaba)

### 规范参考
- [阿里巴巴Java开发手册](https://github.com/alibaba/p3c)
- [Google Java Style Guide](https://google.github.io/styleguide/javaguide.html)
- [Effective Java](https://www.oracle.com/java/technologies/javase/codeconventions-introduction.html)

### 学习资源
- [Spring Boot 实践指南](https://github.com/xkcoding/spring-boot-demo)
- [微服务架构设计模式](https://microservices.io/patterns/)
- [系统设计入门](https://github.com/donnemartin/system-design-primer)

### 开源项目
- [RuoYi-Vue-Pro](https://github.com/YunaiV/ruoyi-vue-pro)
- [Mall](https://github.com/macrozheng/mall)
- [Spring Boot Examples](https://github.com/ityouknow/spring-boot-examples)

**[[⬆]](#TOC)**

## <a name='appendix'>附录</a>

### 常用正则表达式
```java
// 手机号
public static final String MOBILE = "^1[3-9]\\d{9}$";

// 邮箱
public static final String EMAIL = "^\\w+([-+.]\\w+)*@\\w+([-.]\\w+)*\\.\\w+([-.]\\w+)*$";

// 身份证
public static final String ID_CARD = "^[1-9]\\d{5}[1-9]\\d{3}((0\\d)|(1[0-2]))(([0|1|2]\\d)|3[0-1])\\d{3}([0-9]|X)$";

// URL
public static final String URL = "^(https?|ftp)://[^\\s/$.?#].[^\\s]*$";
```

### 常用工具类
```java
// 字符串工具类
import org.apache.commons.lang3.StringUtils;

// 集合工具类
import org.apache.commons.collections4.CollectionUtils;

// JSON工具类
import com.alibaba.fastjson.JSON;

// 日期工具类
import cn.hutool.core.date.DateUtil;

// Bean拷贝工具类
import cn.hutool.core.bean.BeanUtil;
```

### HTTP 状态码
```java
public class HttpStatus {
    public static final int OK = 200;                    // 成功
    public static final int BAD_REQUEST = 400;           // 参数错误
    public static final int UNAUTHORIZED = 401;          // 未认证
    public static final int FORBIDDEN = 403;             // 无权限
    public static final int NOT_FOUND = 404;             // 资源不存在
    public static final int INTERNAL_SERVER_ERROR = 500; // 服务器错误
}
```

**[[⬆]](#TOC)**