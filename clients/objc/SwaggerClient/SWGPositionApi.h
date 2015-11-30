#import <Foundation/Foundation.h>
#import "SWGError.h"
#import "SWGPosition.h"
#import "SWGObject.h"
#import "SWGApiClient.h"


/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

@interface SWGPositionApi: NSObject

@property(nonatomic, assign)SWGApiClient *apiClient;

-(instancetype) initWithApiClient:(SWGApiClient *)apiClient;
-(void) addHeader:(NSString*)value forKey:(NSString*)key;
-(unsigned long) requestQueueSize;
+(SWGPositionApi*) apiWithHeader:(NSString*)headerValue key:(NSString*)key;
+(SWGPositionApi*) sharedAPI;
///
///
/// Get your positions.
/// 
///
/// @param filter Table filter. For example, send {\&quot;symbol\&quot;: \&quot;XBT24H\&quot;}.
/// @param columns Which columns to fetch. For example, send [\&quot;columnName\&quot;].
/// @param count Number of rows to fetch.
/// 
///
/// @return NSArray<SWGPosition>*
-(NSNumber*) positionFindWithCompletionBlock :(NSString*) filter 
     columns:(NSString*) columns 
     count:(NSNumber*) count 
    
    completionHandler: (void (^)(NSArray<SWGPosition>* output, NSError* error))completionBlock;
    


///
///
/// Toggle isolated (fixed) margin per-position.
/// On Speculative (DPE-Enabled) contracts, users can switch isolate margin per-position. This function allows switching margin isolation (aka fixed margin) on and off. A position must be open to isolate it.
///
/// @param symbol Position symbol to isolate.
/// @param enabled If true, will enable isolated margin.
/// 
///
/// @return SWGPosition*
-(NSNumber*) positionIsolateMarginWithCompletionBlock :(NSString*) symbol 
     enabled:(NSNumber*) enabled 
    
    completionHandler: (void (^)(SWGPosition* output, NSError* error))completionBlock;
    


///
///
/// Transfer equity in or out of a position.
/// When margin is isolated on a position, use this function to add or remove margin from the position. Note that you cannot remove margin below the initial margin threshold.
///
/// @param symbol Position symbol to isolate.
/// @param amount Amount to transfer, in satoshis. May be negative.
/// 
///
/// @return SWGPosition*
-(NSNumber*) positionTransferIsolatedMarginWithCompletionBlock :(NSString*) symbol 
     amount:(NSNumber*) amount 
    
    completionHandler: (void (^)(SWGPosition* output, NSError* error))completionBlock;
    



@end
