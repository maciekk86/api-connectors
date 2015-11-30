#import <Foundation/Foundation.h>
#import "SWGStats.h"
#import "SWGError.h"
#import "SWGStatsHistory.h"
#import "SWGObject.h"
#import "SWGApiClient.h"


/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

@interface SWGStatsApi: NSObject

@property(nonatomic, assign)SWGApiClient *apiClient;

-(instancetype) initWithApiClient:(SWGApiClient *)apiClient;
-(void) addHeader:(NSString*)value forKey:(NSString*)key;
-(unsigned long) requestQueueSize;
+(SWGStatsApi*) apiWithHeader:(NSString*)headerValue key:(NSString*)key;
+(SWGStatsApi*) sharedAPI;
///
///
/// Get exchange-wide and per-series turnover and volume statistics.
/// 
///
/// 
///
/// @return NSArray<SWGStats>*
-(NSNumber*) statsFindWithCompletionBlock :
    (void (^)(NSArray<SWGStats>* output, NSError* error))completionBlock;
    


///
///
/// Get historical exchange-wide and per-series turnover and volume statistics.
/// 
///
/// 
///
/// @return NSArray<SWGStatsHistory>*
-(NSNumber*) statsHistoryWithCompletionBlock :
    (void (^)(NSArray<SWGStatsHistory>* output, NSError* error))completionBlock;
    



@end
